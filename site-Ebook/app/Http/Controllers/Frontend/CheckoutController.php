<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function show()
    {
        $cart = session()->get('cart', []);
    $total = array_reduce($cart, fn($sum, $item) => $sum + ($item['price'] * $item['quantity']), 0);

    return view('frontend.checkout.show', compact('cart', 'total'));
    }

    public function store(Request $request)
    {

        // Logic to handle checkout form submission
        return redirect()->route('frontend.checkout.show')->with('success', 'Checkout completed successfully.');
    }
}


