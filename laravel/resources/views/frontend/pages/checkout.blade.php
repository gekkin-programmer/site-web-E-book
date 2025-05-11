@extends('layouts.master')
@section('content')

<main class="container mt-5">
    <h1>Récapitulatif de la Commande et Paiement</h1>

    @if(session('cart') && count(session('cart')) > 0)
        <div class="row">
            <div class="col-md-6 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Votre Panier</span>
                    <span class="badge badge-secondary badge-pill">{{ count(session('cart')) }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @php $total = 0; @endphp
                    @foreach(session('cart') as $bookId => $details)
                        @php $total += $details['price'] * $details['quantity']; @endphp
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $details['title'] }}</h6>
                                <small class="text-muted">Quantité: {{ $details['quantity'] }}</small>
                            </div>
                            <span class="text-muted">{{ number_format($details['price'] * $details['quantity'], 2) }} FCFA</span>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (FCFA)</span>
                        <strong>{{ number_format($total, 2) }}</strong>
                    </li>
                </ul>

                <a href="{{ route('cart.show') }}" class="btn btn-secondary btn-block">Retour au Panier</a>
            </div>
            <div class="col-md-6 order-md-1">
                <h4 class="mb-3">Informations de Paiement</h4>
                <form action="{{ route('checkout.process') }}" method="POST" id="payment-form" class="card p-2">
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
                    <button type="submit" class="btn btn-primary btn-block">Procéder au Paiement</button>
                </form>
            </div>
        </div>
    @else
        <p>Votre panier est vide. <a href="{{ route('home') }}">Retour à la boutique</a></p>
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
    });
</script>
@endsection
@include('layouts.footers.guest.footer')

