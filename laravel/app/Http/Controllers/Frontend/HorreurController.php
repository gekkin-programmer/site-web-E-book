<?php
namespace App\Http\Controllers\Frontend;

// Make sure your `HorreurController` is fetching *all* the book data you need (Dracula, Frankenstein, etc.) and passing it to the view.
// Ideally, fetch this data from your database using an Eloquent model (e.g., `Book`).
// For this example, I'll assume you have a `Book` model and are fetching the data like this:


use App\Http\Controllers\Controller;
use App\Models\Book; // Import your Book model
use Illuminate\Contracts\View\View;

class HorreurController extends Controller
{
    public function horreur(): View
    {
        $horrorBooks = Book::where('genre', 'horror')->get(); // Fetch horror books from the database
        return view('frontend.pages.horreur', compact('horrorBooks'));
    }
}
