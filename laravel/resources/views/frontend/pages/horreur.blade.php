* Modify your `horreur.blade.php` to use the data from your controller.  I will keep the basic HTML structure you have, but make it dynamic.  I'm assuming your `Book` model has fields like `title`, `author`, `description`, `price`, and `cover_image`.  If your database fields are different, adjust accordingly.

```blade
@extends('layouts.master')
@section('content')
<header>
    <nav>
        <a href="{{ route('home') }}" class="active">Home</a>
    </nav>
</header>

<div class="carousel">
    <div class="list">
        @foreach($horrorBooks as $book)
            <div class="item" style="background-image: url('{{ asset('frontend/assets/img/' . $book->cover_image) }}');">
                <div class="content"
                     data-book-id="{{ $book->id }}"
                     data-book-name="{{ $book->title }}"
                     data-book-author="{{ $book->author }}"
                     data-book-description="{{ $book->description }}"
                     data-book-price="{{ $book->price }}">
                    <div class="title">{{ $book->title }}</div>
                    <div class="name">{{ $book->author }}</div>
                    <div class="des">{{ $book->description }}</div>
                    <div class="btn">
                        <button class="view-details-button">Acheter</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="arrows">
        <button class="prev"><</button>
        <button class="next">></button>
    </div>
    <div class="timeRunning"></div>
</div>

<div id="book-purchase-popup" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2 id="popup-book-name"></h2>
        <p>By <span id="popup-book-author"></span></p>
        <p id="popup-book-description"></p>
        <p>Price: $<span id="popup-book-price"></span></p>
        <h3>Payment Options</h3>
        <button id="stripe-payment-button">Pay with Stripe</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bookItems = document.querySelectorAll('.content'); // Corrected selector
        const modal = document.getElementById('book-purchase-popup');
        const closeButton = modal.querySelector('.close-button');
        const bookNameDisplay = document.getElementById('popup-book-name');
        const bookAuthorDisplay = document.getElementById('popup-book-author');
        const bookDescriptionDisplay = document.getElementById('popup-book-description');
        const bookPriceDisplay = document.getElementById('popup-book-price');
        const stripeButton = document.getElementById('stripe-payment-button');

        bookItems.forEach(bookItem => {
            bookItem.addEventListener('click', function() { // Changed to bookItem.addEventListener
                const bookId = this.dataset.bookId;
                const bookName = this.dataset.bookName;
                const bookAuthor = this.dataset.bookAuthor;
                const bookDescription = this.dataset.bookDescription;
                const bookPrice = this.dataset.bookPrice;

                bookNameDisplay.textContent = bookName;
                bookAuthorDisplay.textContent = bookAuthor;
                bookDescriptionDisplay.textContent = bookDescription;
                bookPriceDisplay.textContent = bookPrice;

                modal.style.display = "block";

                modal.dataset.selectedBookId = bookId;
            });
        });

        closeButton.addEventListener('click', function() {
            modal.style.display = "none";
        });

        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });

        stripeButton.addEventListener('click', function() {
            const bookId = modal.dataset.selectedBookId;
            const bookName = bookNameDisplay.textContent;
            const bookPrice = bookPriceDisplay.textContent;

            alert(`Initiating Stripe payment for book: ${bookName} (ID: ${bookId}), Price: $${bookPrice}`);
            // Implement Stripe integration here
        });
    });
</script>
<style>
    /* Your existing CSS for the modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close-button {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close-button:hover,
    .close-button:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

@include('layouts.footers.guest.footer')
@endsection

