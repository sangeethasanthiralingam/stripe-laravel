<form action="{{ route('session') }}" method="POST">
    @csrf
    <input type="number" name="amount" placeholder="Enter amount in GBP">
    <button type="submit" id="checkout-live-button">Checkout</button>
</form>
