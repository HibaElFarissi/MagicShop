@foreach ($cartItems as $cartItem)
    <div>
        <p>Product: {{ $cartItem->product->name }}</p>
        <p>Price: {{ $cartItem->product->price }} $</p>
        <p>Size: {{ $cartItem->size }}</p>
        <p>Color: {{ $cartItem->color }}</p>
        <p>Quantity: 
            <form id="update-form-{{ $cartItem->id }}" method="POST" action="{{ route('cart.update', $cartItem) }}">
                @csrf
                @method('PATCH')
                <input type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1" onchange="submitForm({{ $cartItem->id }})">
                <button type="submit" style="display: none;">Update Quantity</button>
            </form></p>
        <p><form method="POST" action="{{ route('cart.remove', $cartItem) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Remove</button>
        </form></p>
        <!-- Add other product details as needed -->
    </div>

    

@endforeach
<div>
    <p>Total Cost: ${{ $cartItems->sum(function ($cartItem) {
        return $cartItem->quantity * $cartItem->product->price;
    }) }}</p>
   <a href="{{ route('checkout.index' ) }}">place Order</a>
</div>

<script>
    function submitForm(cartItemId) {
        var form = document.getElementById('update-form-' + cartItemId);
        form.submit();
    }
</script>