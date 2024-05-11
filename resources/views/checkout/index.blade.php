@extends('layouts.base')

@section('content')

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <span></span> Shop
                <span></span> Checkout
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="divider mt-50 mb-50"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-25">
                        <h4>Billing Details</h4>
                    </div>
                    <form method="post" action="{{ route('place-order') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" required="" name="Full_Name" placeholder="First name *">
                        </div>

                        <div class="form-group mb-3">
                            {{-- <label for="country_region">Country/Region</label> --}}
                            <select id="country-dd"  name="country_region" class="form-control">
                            <option value="" id="country_region" required>Select Country</option>
                            @foreach($counteries as $data)
                                <option  value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                            </select>

                        </div>
                        <div class="form-group mb-3">
                            {{-- <label for="province">State</label> --}}
                            <select id="state-dd"  name="province" class="form-control" required>
                                <option value="">Select State...</option>
                            </select>

                        </div>
                        <div class="form-group mb-3">
                            {{-- <label for="city">City</label> --}}
                            <select id="city-dd"  name="city" class="form-control" required>
                                <option value="">Select City...</option>
                            </select>

                        </div>


                        <div class="form-group">
                            <input type="text" name="shipping_address" required="" placeholder="Address *">
                        </div>


                        <div class="form-group">
                            <input required="" type="text" name="zip_code" placeholder="Postcode / ZIP *">
                        </div>

                        <div class="form-group">
                            <input required="" type="text" name="telephone_number"  placeholder="Phone *">
                        </div>

                        <div class="form-group">
                            <input required="" type="text"  name="email" placeholder="Email address *">
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit">Proceed to Payment</button>
                        </div>

                    </form>
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="mb-20">
                            <h4>Your Orders</h4>
                        </div>
                        <div class="table-responsive order_table text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $cartItem)

                                             <tr>
                                                <td class="image product-thumbnail"><img src="{{ asset('storage/' . json_decode($cartItem->product->images)[0]) }}"  alt="product_image"></td>
                                                <td>
                                                    <h5><a href="">{{ $cartItem->product->name }}</a></h5> <span class="product-qty">x {{ $cartItem->quantity }}</span>
                                                </td>
                                                <td>${{ $cartItem->product->price }}</td>
                                            </tr>
                                    @endforeach



                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">${{ $cartItems->sum(function ($cartItem) {
                                            return $cartItem->quantity * $cartItem->product->price;
                                            }) }}</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#country-dd').change(function(event) {
        var idCountry = this.value;
        $('#state-dd').html('');

        $.ajax({
        url: "/api/fetch-state",
        type: 'POST',
        dataType: 'json',
        data: {country_id: idCountry,_token:"{{ csrf_token() }}"},
        success:function(response){
            $('#state-dd').html('<option value="">Select State</option>');
            $.each(response.states,function(index, val){
            $('#state-dd').append('<option value="'+val.id+'"> '+val.name+' </option>')
            });
            $('#city-dd').html('<option value="">Select City</option>');
        }
        })
    });
    $('#state-dd').change(function(event) {
        var idState = this.value;
        $('#city-dd').html('');
        $.ajax({
        url: "/api/fetch-cities",
        type: 'POST',
        dataType: 'json',
        data: {state_id: idState,_token:"{{ csrf_token() }}"},
        success:function(response){
            $('#city-dd').html('<option value="">Select State</option>');
            $.each(response.cities,function(index, val){
            $('#city-dd').append('<option value="'+val.id+'"> '+val.name+' </option>')
            });
        }
        })
    });
    });
</script>

@endsection
