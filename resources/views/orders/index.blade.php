<!-- resources/views/orders/index.blade.php -->

<h1>List of Orders</h1>

<ul>
    @foreach ($orders as $order)
        <li>{{ $order->id }} - {{ $order->shipping_address }} - {{ $order->total_cost }}</li>
        <!-- Add other order details as needed -->
    @endforeach
   
</ul>
