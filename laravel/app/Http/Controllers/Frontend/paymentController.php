<?php

namespace App\Http\Controllers\Frontend;  // Updated namespace

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  // Base controller

class PaymentController extends Controller
{
    // Show the payment form
    public function showPaymentForm()
    {
        return view('frontend.pages.payment');
    }
}
