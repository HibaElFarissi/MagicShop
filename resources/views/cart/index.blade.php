@extends('layouts.base')

@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
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
                                @forelse($cartItems as $cartItem)
                                <tr>
                                    <td class="image product-thumbnail"><img class="default-img" src="{{ asset('images/' . json_decode($cartItem->product->images)[0]) }}"  alt="product_image"></td>

                                    <td class="product-des product-name">
                                        <h5 class="product-name"><a>{{ $cartItem->product->name }}</a></h5>
                                        <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                        </p>
                                    </td>
                                    <td class="price" data-title="Price"><span>{{ $cartItem->product->price }} $ </span></td>


                                    <td class="text-center" >
                                        {{-- <select name="quantity">
                                            @for ($i = 1; $i <= $product->quantity; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select> --}}


                                        <div class="">
                                            <form id="update-form-{{ $cartItem->id }}" method="POST" action="{{ route('cart.update', $cartItem) }}">
                                                @csrf
                                                @method('PATCH')
                                                {{-- <input type="number" name="quantity" value="{{ $cartItem->quantity }}" > --}}
                                                <select name="quantity" min="1" onchange="submitForm({{ $cartItem->id }})">
                                                    <option selected disabled value="{{ $cartItem->quantity }}"> {{ $cartItem->quantity }}</option>
                                                    @for ($i = 1; $i <= $cartItem->product->quantity; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                <button type="submit" style="display: none;">Update Quantity</button>

                                            </form>

                                        </div>


                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>{{ $cartItem->size }}</span>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>{{ $cartItem->color }}</span>
                                    </td>

                                    <td>
                                        <form id="removeForm{{$cartItem->id}}"  action="{{ route('cart.remove', $cartItem) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { this.closest('form').submit(); }" style="color: inherit; cursor: pointer; text-decoration: none;">
                                                <!-- Your icon or text for the remove link can go here -->
                                                <i class="fi-rs-trash"></i>
                                            </a>
                                        </form>
                                    </td>

                                </tr>

                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-action text-end">
                        <a href="{{ route('shop') }}" class="btn"><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
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
