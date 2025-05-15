@extends('layouts.master')
@section('content')
<div class="checkout-page">
    <!-- Order Summary Section -->
    <div class="order-summary">
    <h1>Your Order</h1>
    
    <!-- Single Featured Product -->
    <div class="featured-product">
        <!-- Large Product Image -->
        <div class="product-image-container">
            <img src="{{ asset('frontend/assets/img/frankenstein.jpeg') }}" alt="frankenstein" class="featured-product-image">
        </div>
        
        <!-- Product Details -->
        <div class="product-details">
            <h2>Frankenstein</h2>
            <p class="product-color">By Mary Geoise</p>
            <p class="product-price">$999.00</p>
            
            <!-- Quantity Controls 
            <div class="quantity-controls">
                <button class="quantity-btn decrease">-</button>
                <span class="quantity">1</span>
                <button class="quantity-btn increase">+</button>
            </div> -->
            
            <!-- Remove Button -->
            <button class="remove-item">Remove Item</button>
        </div>
    </div>
    
    <!-- Coupon Section -->
    <div class="coupon-section">
        <input type="text" class="coupon" placeholder="Enter coupon code">
        <button class="apply-coupon">Apply Coupon</button>
    </div>
    
    <!-- Price Summary -->
    <div class="price-summary">
        <div class="price-row">
            <span>Sub total</span>
            <span class="subtotal">$999.00</span>
        </div>
        <div class="price-row">
            <span>Tax (24%)</span>
            <span class="tax">$239.76</span>
        </div>
        <div class="price-row total">
            <span>Total</span>
            <span class="total">$1,238.76</span>
        </div>
    </div>
</div>

    <!-- Contact Information Section -->
    <div class="contact-info" data-price="3220.28">
        <h1>Contact Information</h1>
        <form class="contact-form">
            <div class="form-group">
                <label>First & Last name</label>
                <input type="text" class="modern-input2" placeholder="Enter first & last name">
            </div>
            
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="modern-input2" placeholder="Enter email address">
            </div>
            
            <div class="form-group">
                <label>Country</label>
                <select>
                    <option>Finland</option>
                    <option>United States</option>
                    <option>United Kingdom</option>
                </select>
            </div>
            
            <!-- Payment Method Section -->
            <!-- Updated Payment Method Section -->
<div class="payment-methods">
    <h3 class="payment-title">Choose Payment Method</h3>
    <div class="payment-options">
        <!-- Credit Card Option -->
        <div class="payment-option selected">
            <input type="radio" name="payment" id="credit-card" checked>
            <label for="credit-card" class="payment-card">
                <div class="payment-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24" height="24">
                        <path fill="#1565C0" d="M45 35a3 3 0 01-3 3H6a3 3 0 01-3-3V13a3 3 0 013-3h36a3 3 0 013 3v22z"/>
                        <path fill="#039BE5" d="M45 25v-5H3v5h42z"/>
                        <path fill="#1565C0" d="M13 31h5v3h-5zM21 31h5v3h-5zM29 31h5v3h-5z"/>
                    </svg>
                </div>
                <div class="payment-details">
                    <span class="payment-name">Credit Card</span>
                    <span class="payment-desc">Pay with Visa, Mastercard, etc.</span>
                </div>
            </label>
        </div>

        <!-- PayPal Option -->
        <div class="payment-option">
            <input type="radio" name="payment" id="paypal">
            <label for="paypal" class="payment-card">
                <div class="payment-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24" height="24">
                        <path fill="#1565C0" d="M18.7 13.7c-.8-3.3-3.5-5.7-6.9-5.7H5c-1.1 0-2 .9-2 2v24c0 1.1.9 2 2 2h5.6c3.4 0 6.1-2.4 6.9-5.7l3.5-14.3c.2-.9-.5-1.7-1.4-1.7h-3.9z"/>
                        <path fill="#039BE5" d="M45 25l-3.5 14.3c-.8 3.3-3.5 5.7-6.9 5.7H29c-1.1 0-2-.9-2-2V13c0-1.1.9-2 2-2h5.6c3.4 0 6.1 2.4 6.9 5.7L45 25z"/>
                        <path fill="#1565C0" d="M36.7 13.7c-.8-3.3-3.5-5.7-6.9-5.7H25c-1.1 0-2 .9-2 2v24c0 1.1.9 2 2 2h5.6c3.4 0 6.1-2.4 6.9-5.7l3.5-14.3c.2-.9-.5-1.7-1.4-1.7h-3.9z"/>
                    </svg>
                </div>
                <div class="payment-details">
                    <span class="payment-name">PayPal</span>
                    <span class="payment-desc">Pay with your PayPal account</span>
                </div>
            </label>
        </div>

        <!-- Bank Transfer Option -->
        <div class="payment-option">
            <input type="radio" name="payment" id="bank-transfer">
            <label for="bank-transfer" class="payment-card">
                <div class="payment-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24" height="24">
                        <path fill="#2196F3" d="M24 4C13 4 4 13 4 24s9 20 20 20 20-9 20-20S35 4 24 4zm0 36c-8.8 0-16-7.2-16-16S15.2 8 24 8s16 7.2 16 16-7.2 16-16 16z"/>
                        <path fill="#2196F3" d="M24 10c-7.7 0-14 6.3-14 14s6.3 14 14 14 14-6.3 14-14-6.3-14-14-14zm0 24c-5.5 0-10-4.5-10-10S18.5 14 24 14s10 4.5 10 10-4.5 10-10 10z"/>
                        <path fill="#2196F3" d="M24 16c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/>
                    </svg>
                </div>
                <div class="payment-details">
                    <span class="payment-name">Bank Transfer</span>
                    <span class="payment-desc">Direct transfer from your bank</span>
                </div>
            </label>
        </div>
    </div>
</div>
            
            <button type="submit" class="checkout-btn">Continue to Payment</button>
        </form>
    </div>
</div>

<!-- Success Modal (Centered) -->
<div class="success-modal-overlay" id="successModal">
    <div class="success-modal">
        <div class="success-content">
            <div class="success-animation">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                    <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                </svg>
            </div>
            <h2 class="success-title">Payment Successful!</h2>
            <p class="success-message">Your order #12345 has been confirmed.</p>
            <p class="success-details">We've sent a confirmation email to your address.</p>
            <div class="success-actions">
                <button class="continue-shopping">Continue Shopping</button>
                <button class="view-order">View Order Details</button>
            </div>
        </div>
    </div>
</div>
@endsection





