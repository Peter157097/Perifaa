<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mundo Melhor - Pagamento</title>
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
  <div class="container">
    <h2>Pagamento</h2>
    <form id="payment-form" method="POST" action="{{ route('pagamento.process') }}">
      @csrf
      <input type="hidden" name="amount" value="{{ $valor }}">
      <div class="form-row">
        <label for="card-element">Cartão de crédito</label>
        <div id="card-element">
          <!-- A Stripe Element será inserida aqui -->
        </div>
        <div id="card-errors" role="alert"></div>
      </div>
      <button type="submit">Pagar ${{ $valor }}</button>
    </form>
  </div>

  <script>
    var stripe = Stripe('{{ env("STRIPE_PUBLIC_KEY") }}');
    var elements = stripe.elements();
    var card = elements.create('card');
    card.mount('#card-element');

    card.on('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      stripe.createPaymentMethod('card', card).then(function(result) {
        if (result.error) {
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          stripePaymentMethodHandler(result.paymentMethod);
        }
      });
    });

    function stripePaymentMethodHandler(paymentMethod) {
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'payment_method_id');
      hiddenInput.setAttribute('value', paymentMethod.id);
      form.appendChild(hiddenInput);
      form.submit();
    }
  </script>
</body>
</html>
