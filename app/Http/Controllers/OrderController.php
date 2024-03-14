<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Retrieve all orders from the database
        $orders = Order::all();
        $OrderItems =OrderItem::all();
        // Pass the orders to the view for rendering
        return view('orders.index', compact('orders', 'OrderItems'));
    }
}
