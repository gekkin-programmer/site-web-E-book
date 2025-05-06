@extends('layouts.master')
@section('content')

<main>
<body>
    <form method="POST" action="{{ route('frontend.checkout.store') }}">
        @csrf

        <h2>Customer Information</h2>

        <div class="form-group">
            <label>Full Name*</label>
            <input type="text" name="name" required class="form-control">
        </div>

        <div class="form-group">
            <label>Email*</label>
            <input type="email" name="email" required class="form-control">
        </div>

        <div class="form-group">
            <label>Phone*</label>
            <input type="tel" name="phone" required class="form-control">
        </div>

        <div class="form-group">
            <label>Shipping Address*</label>
            <textarea name="address" required class="form-control" rows="3"></textarea>
        </div>

        <h2>Order Summary</h2>

        <div class="order-items">
            @foreach($cart as $id => $item)
                <div class="item">
                    {{ $item['name'] }} -
                    {{ $item['quantity'] }} ×
                    ${{ number_format($item['price'], 2) }}
                </div>
            @endforeach
        </div>

        <div class="total">
            <strong>Total: ${{ number_format($total, 2) }}</strong>
        </div>

        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
</body>
@endsection
