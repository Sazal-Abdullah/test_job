@extends('admin.layouts.master')

@section('content')
    <h2>Add Product</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <!-- Product Name & SKU -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sku">Product SKU</label>
                    <input type="text" name="sku" id="sku" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Unit & Unit Value -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <input type="text" name="unit" id="unit" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="unit_value">Unit Value</label>
                    <input type="text" name="unit_value" id="unit_value" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Selling Price & Purchase Price -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="selling_price">Selling Price</label>
                    <input type="number" name="selling_price" id="selling_price" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="purchase_price">Purchase Price</label>
                    <input type="number" name="purchase_price" id="purchase_price" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Discount & Tax -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="discount">Discount (%)</label>
                    <input type="number" name="discount" id="discount" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tax">Tax (%)</label>
                    <input type="number" name="tax" id="tax" class="form-control">
                </div>
            </div>
        </div>

        <!-- Product Image -->
        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <!-- Product Variations -->
        <h4>Product Variations</h4>
        <div id="variations">
            <div class="variation">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="variation_name">Variation Name</label>
                            <input type="text" name="variations[0][name]" class="form-control" placeholder="e.g. Color, Size, Weight">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="variation_value">Variation Value</label>
                            <input type="text" name="variations[0][value]" class="form-control" placeholder="e.g. Red, XL, 1KG">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="purchase_price">Variation Purchase Price</label>
                            <input type="number" name="variations[0][purchase_price]" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="selling_price">Variation Selling Price</label>
                            <input type="number" name="variations[0][selling_price]" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
@endsection
