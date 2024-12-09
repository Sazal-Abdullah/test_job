<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
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

        $products = $products->paginate(10); // Server-side pagination

        return view('admin.pages.pos.index', compact('products'));
    }



    public function addToCart(Request $request)
{
    $cart = session()->get('cart', []);

    $cart[$request->product_id] = [
        'name' => $request->name,
        'quantity' => $request->quantity,
        'price' => $request->price,
        'discounted_price' => $request->discounted_price,
    ];

    session()->put('cart', $cart);

    return response()->json(['success' => true, 'cart' => $cart]);
}








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
