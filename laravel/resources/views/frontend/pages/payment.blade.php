<!-- resources/views/checkout.blade.php -->
<form method="POST" action="{{ route('checkout.store') }}">
    @csrf

    <!-- Guest Information -->
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="customer_name" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="customer_email" required>
    </div>

    <!-- Rest of your checkout form -->
    <button type="submit">Proceed to Payment</button>
</form>
