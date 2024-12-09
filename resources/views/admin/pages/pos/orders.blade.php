@extends('admin.layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Order</h3>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('pos.orders.list') }}">
                        <input type="date" name="start_date" placeholder="Start Date">
                        <input type="date" name="end_date" placeholder="End Date">
                        <button type="submit">Filter</button>
                    </form>

                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Total Price</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                                                
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->customer_name }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $orders->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
