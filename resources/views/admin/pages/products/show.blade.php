@extends('admin.layouts.master')

@section('content')
    <h2>{{ $product->name }}</h2>
    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 200px;">
    <p>SKU: {{ $product->sku }}</p>
    <p>Unit: {{ $product->unit }} ({{ $product->unit_value }})</p>
    <p>Selling Price: {{ $product->selling_price }}</p>
    <p>Purchase Price: {{ $product->purchase_price }}</p>
    <p>Discount: {{ $product->discount }}%</p>
    <p>Tax: {{ $product->tax }}%</p>

    <h4>Variations</h4>
    <ul>
        @foreach ($product->variations as $variation)
            <li>{{ $variation->variation_name }}: {{ $variation->variation_value }} ({{ $variation->selling_price }})</li>
        @endforeach
    </ul>
@endsection
