<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Book;

class CartController extends Controller
{
    public function showCart(Request $request): View
    {
        // You would typically retrieve cart items from the session or database here
        $cartItems = session('cart', []); // Example: Get cart items from the session
         $bookId = $request->input('book_id');

    if ($bookId) {
        $book = $this->getBookDetails($bookId); // Reuse the method from CheckoutController

        if ($book) {
            // Add the book to the cart (you might want to check if it's already there)
            $cartItems[] = $book;
            session(['cart' => $cartItems]);
            $book = null; // Clear $book so we don't display the "one item" message unnecessarily
        }
    }

        return view('frontend.pages.cart', compact('cartItems','book'));
    }
    protected function getBookDetails(string $bookId): ?array
{
    $books = [
        ['id' => '1', 'title' => 'The Shining', 'price' => 15.99],
        ['id' => '2', 'title' => 'Dracula', 'price' => 12.50],
    ];

    foreach ($books as $book) {
        if ($book['id'] === $bookId) {
            return $book;
        }
    }

    return null;
}

    public function purchase(Request $request)
    {
        // Logic to handle the actual purchase (e.g., process payment, update inventory)
        // You would likely get the cart items and user details from the session or request

        // After successful purchase, you might clear the cart and redirect to a thank you page
        session()->forget('cart');
        return redirect()->route('home')->with('success', 'Thank you for your purchase!');
    }
     public function show()
    {
        // Logic to retrieve the user's cart data goes here
        $cartItems = $this->getCartItems(); // Example: Fetch cart items

        return view('frontend.pages.cart', compact('cartItems')); // Assuming you have a cart.blade.php view
    }

    protected function getCartItems(): array
    {
        // Retrieve cart items from the session
        return session('cart', []);
    }
    public function add(Request $request)
{
    $bookId = $request->input('book_id');
    $book = Book::findOrFail($bookId); // Use the correct class name

    $cart = session()->get('cart', []);

    if (isset($cart[$bookId])) {
        $cart[$bookId]['quantity']++;
    } else {
        $cart[$bookId] = [
            'title' => $book->title,
            'price' => $book->price,
            'quantity' => 1,
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Livre ajouté au panier!');
}
}
