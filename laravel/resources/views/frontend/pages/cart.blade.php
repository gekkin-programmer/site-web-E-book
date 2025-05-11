@extends('layouts.master')
@section('content')

<main class="container mt-5">
    <h1>Votre Panier</h1>

    @if(session('cart') && count(session('cart')) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach(session('cart') as $bookId => $details)
                    @php $total += $details['price'] * $details['quantity']; @endphp
                    <tr>
                        <td>{{ $details['title'] }}</td>
                        <td>{{ number_format($details['price'], 2) }} FCFA</td>
                        <td>
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity-update" min="1" data-id="{{ $bookId }}">
                        </td>
                        <td>{{ number_format($details['price'] * $details['quantity'], 2) }} FCFA</td>
                        <td>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $bookId }}">Supprimer</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right"><strong>Total:</strong></td>
                    <td><strong>{{ number_format($total, 2) }} FCFA</strong></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>

        <div class="mt-4">
            <h2>Paiement</h2>
            <form action="{{ route('checkout.process') }}" method="POST" id="payment-form">
                @csrf
                <div class="form-group">
                    <label for="name">Nom sur la carte</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="card-element">Informations de la carte bancaire</label>
                    <div id="card-element">
                        </div>

                    <div id="card-errors" role="alert"></div>
                </div>

                <input type="hidden" name="total_amount" value="{{ $total * 100 }}"> {{-- Stripe requires amount in cents/smallest currency unit --}}

                <button type="submit" class="btn btn-primary">Procéder au Paiement</button>
            </form>
        </div>

    @else
        <p>Votre panier est vide.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Retour à la boutique</a>
    @endif
</main>

<script src="https://js.stripe.com/v3/"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var stripe = Stripe('YOUR_STRIPE_PUBLISHABLE_KEY'); // Replace with your actual publishable key
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        var form = document.getElementById('payment-form');
        var cardErrors = document.getElementById('card-errors');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    cardErrors.textContent = result.error.message;
                } else {
                    // Send the token to your server
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }

        // Update Quantity (Basic Example - You'll need a controller method to handle this)
        const quantityInputs = document.querySelectorAll('.quantity-update');
        quantityInputs.forEach(input => {
            input.addEventListener('change', function() {
                const bookId = this.dataset.id;
                const quantity = this.value;
                // You would typically make an AJAX request here to update the cart quantity on the server
                console.log(`Update book ${bookId} quantity to ${quantity}`);
            });
        });

        // Remove from Cart (Basic Example - You'll need a controller method to handle this)
        const removeButtons = document.querySelectorAll('.remove-from-cart');
        removeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const bookId = this.dataset.id;
                // You would typically make an AJAX request here to remove the item from the cart on the server
                console.log(`Remove book ${bookId} from cart`);
                // Optionally, you can remove the table row from the DOM for immediate feedback
                this.closest('tr').remove();
            });
        });
    });
</script>
@include('layouts.footers.guest.footer')
@endsection
