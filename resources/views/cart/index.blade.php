@foreach ($cartItems as $cartItem)
    <div>
        <p>Product: </p>
        <p>Price: </p>
        <p>Size: </p>
        <p>Color: </p>
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





@extends('layouts.base')

@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Shop
                <span></span> Your Cart
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table shopping-summery text-center clean">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartItems as $cartItem)
                                <tr>
                                    <td class="image product-thumbnail"><img src="frontEnd/imgs/shop/product-1-2.jpg" alt="#"></td>
                                    <td class="product-des product-name">
                                        <h5 class="product-name"><a>{{ $cartItem->product->name }}</a></h5>
                                        <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                        </p>
                                    </td>
                                    <td class="price" data-title="Price"><span>{{ $cartItem->product->price }} $ </span></td>
                                    <td class="text-center" data-title="Stock">
                                        {{-- <div class="detail-qty border radius  m-auto">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div> --}}
                                        <form id="update-form-{{ $cartItem->id }}" method="POST" action="{{ route('cart.update', $cartItem) }}">
                                            @csrf
                                            @method('PATCH')
                                            <input type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1" onchange="submitForm({{ $cartItem->id }})">
                                            <button type="submit" style="display: none;">Update Quantity</button>
                                        </form></p>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>{{ $cartItem->size }}</span>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>{{ $cartItem->color }}</span>
                                    </td>
                                    <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                </tr>
                           
                                <tr>
                                    <td colspan="6" class="text-end">
                                        <a href="#" class="text-muted"> <i class="fi-rs-cross-small"></i> Clear Cart</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-action text-end">
                        <a class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                    </div>
                    <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                    <div class="row mb-50">
                        
                        <div class="col-lg-6 col-md-12">
                            <div class="border p-md-4 p-30 border-radius cart-totals">
                                <div class="heading_s1 mb-3">
                                    <h4>Cart Totals</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                           
                                            <tr>
                                                <td class="cart_total_label">Total</td>
                                                <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">${{ $cartItems->sum(function ($cartItem) {
                                                    return $cartItem->quantity * $cartItem->product->price;
                                                }) }}</span></strong></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <a href="{{ route('checkout.index') }}" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection



















































































<script>
    function submitForm(cartItemId) {
        var form = document.getElementById('update-form-' + cartItemId);
        form.submit();
    }
</script>