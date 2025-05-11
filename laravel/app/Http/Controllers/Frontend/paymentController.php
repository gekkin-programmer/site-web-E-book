<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class PaymentController
{
    public function show($order)
    {
        // Logic to show payment details for the given order
        return view('payment.show', compact('order'));
    }

    public function process(Request $request, $order)
    {
        // Logic to process the payment for the given order
        return redirect()->route('payment')->with('success', 'Payment processed successfully!');
    }
}
