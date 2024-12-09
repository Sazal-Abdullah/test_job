@extends('admin.layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <!-- Left: Product List -->
                        <div class="col-lg-8">
                            <div class="card-header bg-primary text-white">
                                <h3 class="mb-0">Product List</h3>
                            </div><br>
                            <form method="GET" action="{{ route('pos.index') }}">
                                <input type="text" name="search" placeholder="Search by name or SKU" value="{{ request('search') }}">
                                <button type="submit">Search</button>
                            </form>

                            <div class="product-list">
                                @foreach($products as $product)
                                    <div class="product-item">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100px;">
                                        <h5>{{ $product->name }}</h5>
                                        <p>SKU: {{ $product->sku }}</p>
                                        <p>Price: {{ $product->selling_price }}</p>
                                        <p>Discounted Price: {{ $product->price - ($product->price * $product->discount / 100) }}</p>
                                        <button class="add-to-cart"
                                                data-id="{{ $product->id }}"
                                                data-name="{{ $product->name }}"
                                                data-price="{{ $product->selling_price }}"
                                                data-discount="{{ $product->discount }}">
                                            Add to Cart
                                        </button>
                                    </div>
                                @endforeach
                            </div>


                            {{ $products->links() }}
                        </div>


                        <!-- Right: Shopping Cart -->
                        <div class="col-lg-4">
                            <div class="card-header bg-success text-white">
                                <h3 class="mb-0">Shopping Cart</h3>
                            </div>
                            <div id="cart" class="card shadow-sm p-3">
                                <div class="cart-items" style="max-height: 300px; overflow-y: auto;">
                                    <table class="table table-bordered table-sm mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 20%;">Image</th>
                                                <th style="width: 40%;">Name</th>
                                                <th style="width: 15%;">Qty</th>
                                                <th style="width: 15%;">Price</th>
                                                <th style="width: 10%;">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody id="cart-table-body">
                                            @foreach($cartItems as $item)
                                                <tr>
                                                    <td>
                                                        @if($item->product && $item->product->image)
                                                            <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->name }}" style="width: 50px; height: auto;">
                                                        @else
                                                            <span>No Image</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm update-qty"
                                                               data-id="{{ $item->id }}" value="{{ $item->quantity }}" min="1">
                                                    </td>
                                                    <td class="text-right">${{ number_format($item->quantity * $item->discounted_price, 2) }}</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-sm btn-danger remove-item" data-id="{{ $item->id }}">&times;</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-footer mt-3">
                                    <h5 class="d-flex justify-content-between">
                                        <span>Total:</span>
                                        <span id="cart-total" class="text-success">$0.00</span>
                                    </h5>
                                    <button class="btn btn-primary btn-block mt-3" id="checkout-btn" disabled>
                                        Proceed to Checkout
                                    </button>
                                    {{-- <form id="checkout-form" action="{{ route('pos.placeOrder') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="customer_name" value="Default Customer Name">
                                        <button type="submit" class="btn btn-primary btn-block mt-3">
                                            Proceed to Checkout
                                        </button>
                                    </form> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function () {
        const productId = this.dataset.id;
        const productName = this.dataset.name;
        const price = parseFloat(this.dataset.price);
        const discount = parseFloat(this.dataset.discount);

        const discountedPrice = price - (price * discount / 100);
        const quantity = 1; // Default quantity

        // Make the fetch request to add to cart
        fetch('{{ route("pos.cart.add") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({
                product_id: productId,
                name: productName,
                price: price,
                discounted_price: discountedPrice,
                quantity: quantity,
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                updateCartTable(data.cart); // Dynamically update cart table
            } else {
                console.error('Failed to add to cart');
            }
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    });
});

// Function to dynamically update the cart table
function updateCartTable(cart) {
    const cartTableBody = document.getElementById('cart-table-body');
    cartTableBody.innerHTML = ''; // Clear current cart items

    cart.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="/storage/${item.product.image}" alt="${item.name}" style="width: 50px; height: auto;">
            </td>
            <td>${item.name}</td>
            <td>
                <input type="number" class="form-control form-control-sm update-qty"
                       data-id="${item.id}" value="${item.quantity}" min="1">
            </td>
            <td class="text-right">$${(item.quantity * item.discounted_price).toFixed(2)}</td>
            <td class="text-center">
                <button class="btn btn-sm btn-danger remove-item" data-id="${item.id}">&times;</button>
            </td>
        `;
        cartTableBody.appendChild(row);
    });
}



</script>
@endsection
