<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Add your CSS stylesheets and scripts -->
</head>
<body>
    <h1>Checkout</h1>

    <div>
        <h2>Cart Items</h2>
        <ul>
            @foreach ($cartItems as $cartItem)
                <li>{{ $cartItem->product->name }} - Quantity: {{ $cartItem->quantity }}</li>
                <!-- Display other cart item details -->
            @endforeach
        </ul>
    </div>

    <div>
        <h2>Shipping Information</h2>
        <!-- Shipping information form -->
        <form method="POST" action="{{ route('place-order') }}">
            @csrf
            <!-- Shipping address fields -->
            <label for="Full_Name">Full Name</label>
            <input type="text" id="Full_Name" name="Full_Name" required>
            <label for="shipping_address">Shipping Address</label>
            <input type="text" id="shipping_address" name="shipping_address" required>
            <label for="email">email</label>
            <input type="text" id="email" name="email" required>
        
            <label for="telephone_number">telephone number</label>
            <input type="text" id="telephone_number" name="telephone_number" required>
            <div class="form-group mb-3">
                <label for="country_region">Country/Region</label>
                <select id="country-dd"  name="country_region" class="form-control">
                <option value="" id="country_region" required>Select Country</option>
                @foreach($counteries as $data)
                    <option  value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
                </select>
               
            </div>
            <div class="form-group mb-3">
                <label for="province">Province</label>
                <select id="state-dd"  name="province" class="form-control" required></select>
               
            </div>
            <div class="form-group mb-3">
                <label for="city">City</label>
                <select id="city-dd"  name="city" class="form-control" required></select>
               
            </div>
               
        
            <label for="zip_code">Zip Code</label>
            <input type="text" id="zip_code" name="zip_code" required>
            <!-- Other shipping information fields -->

            <button type="submit">Proceed to Payment</button>
        </form>
    </div>

    <!-- Payment information section -->
    <!-- You can add payment information form here -->

    <!-- Add your footer and other content -->
</body>
</html>
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