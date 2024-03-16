<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Infos;
use App\Models\Order;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{
    public function Factory(Request $request)
    {
        $orders = Order::latest()->paginate(1);
        $OrderItems =$request->user()->orderItems()->with('Order')->get();
        // $orderItem =  $OrderItems->order()->get();
        return view('checkout.Factory', compact('orders', 'OrderItems'));
    }

    public function index( Request $request)
    {
        $cartIcon = Product::withCount('cartItems')->get();
        $totalCartCount = $cartIcon->sum('cart_items_count');
        $infos = Infos::paginate(1);
        $categories = Category::all();
        $counteries = Country::get(['name','id']);
        $cartItems = $request->user()->cartItems()->with('product')->get();
        return view('checkout.index', compact('cartItems', 'counteries','infos','categories','totalCartCount','cartIcon'));
    }

    public function placeOrder(Request $request)
    {
        // Validate the form data
        $request->validate([
            'Full_Name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'shipping_address' => 'required|string|max:255',
            'telephone_number' => 'required|string|max:20',
            'country_region' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
        ]);

        // Retrieve cart items for the current user
        $cartItems = $request->user()->cartItems()->with('product')->get();

        // Calculate the total cost of the order
        $totalCost = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->product->price;
        });

        // Start a database transaction
        DB::beginTransaction();

        try {
            // Create a new order record in the database
            $order = new Order();
            $order->user_id = auth()->id();
            $order->shipping_address = $request->input('shipping_address');
            $order->telephone_number = $request->input('telephone_number');
            $order->Full_Name = $request->input('Full_Name');
            $order->email = $request->input('email');
            $order->country_region = $request->input('country_region');
            $order->province = $request->input('province');
            $order->city = $request->input('city');
            $order->zip_code = $request->input('zip_code');
            $order->total_cost = $totalCost;
            $order->save();

            // Create order items for each cart item
            foreach ($cartItems as $cartItem) {
                $orderItem = new OrderItem();
                $orderItem->user_id = auth()->id();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $cartItem->product_id;
                $orderItem->quantity = $cartItem->quantity;
                $orderItem->size = $cartItem->size;
                $orderItem->color = $cartItem->color;
                $orderItem->unit_price = $cartItem->product->price;
                $orderItem->save();
            }

            // Clear the cart items for the current user
            $request->user()->cartItems()->delete();

            // Commit the transaction
            DB::commit();

            // Redirect to the thank-you page with a success message
            return redirect()->route('Factory')->with('success', 'Your order has been placed successfully!');
        } catch (\Exception $e) {
            // Rollback the transaction in case of any error
            DB::rollBack();

            // Redirect back to the checkout page with an error message
            return redirect()->back()->with('error', 'There was an error processing your order. Please try again later.');
        }
    }
}
