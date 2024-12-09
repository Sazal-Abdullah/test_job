<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class POSController extends Controller
{

    public function index(Request $request)
{
    $products = Product::query();

    if ($request->has('search')) {
        $products->where('name', 'like', '%' . $request->search . '%')
                 ->orWhere('sku', 'like', '%' . $request->search . '%');
    }

    $products = $products->paginate(10);

    $cartItems = Cart::where('user_id', auth()->id())->get(); // Authenticated user's cart

    return view('admin.pages.pos.index', compact('products', 'cartItems'));
}



public function addToCart(Request $request)
{
    $validated = $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
        'price' => 'required|numeric',
        'discounted_price' => 'required|numeric',
    ]);

    // Calculate total price
    $totalPrice = $validated['quantity'] * $validated['discounted_price'];

    // Update or create cart item
    $cartItem = Cart::updateOrCreate(
        [
            'product_id' => $validated['product_id'],
            'user_id' => auth()->id(),
        ],
        [
            'name' => $request->input('name'),
            'quantity' => \DB::raw("quantity + {$validated['quantity']}"), // Increment quantity
            'price' => $validated['price'],
            'discounted_price' => $validated['discounted_price'],
            'total_price' => $totalPrice, // Save total price
        ]
    );

    // Fetch updated cart for frontend
    $updatedCart = Cart::where('user_id', auth()->id())->with('product')->get();

    return response()->json([
        'success' => true,
        'message' => 'Product added to cart successfully!',
        'cartItem' => $cartItem,
        'cart' => $updatedCart,
    ]);
}





public function updateCart(Request $request)
{
    $cartItem = Cart::where('id', $request->cart_id)->where('user_id', auth()->id())->firstOrFail();
    $cartItem->update(['quantity' => $request->quantity]);

    return response()->json(['success' => true, 'cart' => Cart::where('user_id', auth()->id())->get()]);
}

// // Update Cart Quantity_ok
// public function update(Request $request)
// {
//     $cartItem = CartItem::find($request->product_id);
//     if ($cartItem) {
//         $cartItem->quantity = $request->quantity;
//         $cartItem->total_price = $cartItem->product->price * $cartItem->quantity;
//         $cartItem->save();
//     }

//     return response()->json(['success' => true, 'cart' => CartItem::all()]);
// }

// // Remove Item from Cart
// public function remove(Request $request)
// {
//     $cartItem = CartItem::find($request->product_id);
//     if ($cartItem) {
//         $cartItem->delete();
//     }

//     return response()->json(['success' => true, 'cart' => CartItem::all()]);
// }









    public function placeOrder(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return back()->with('error', 'Cart is empty.');
        }

        $order = Order::create([
            'customer_name' => $request->customer_name,
            'total_price' => array_sum(array_map(fn($item) => $item['quantity'] * $item['discounted_price'], $cart)),
        ]);

        foreach ($cart as $product_id => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product_id,
                'quantity' => $item['quantity'],
                'price' => $item['discounted_price'],
            ]);
        }

        session()->forget('cart');
        return redirect()->route('pos.orders.list')->with('success', 'Order placed successfully.');
    }




    public function orderList(Request $request)
    {
        $orders = Order::with('items');

        if ($request->has('start_date') && $request->has('end_date')) {
            $orders->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        $orders = $orders->paginate(10); // Pagination
        return view('admin.pages.pos.orders', compact('orders'));
    }










}
