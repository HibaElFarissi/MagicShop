<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

    }
    
    public function index(Request $request)
    {
        // $wishlistItems = Wishlist::with('product')->get();
        $wishlistItems =$request->user()->wishlistItems()->with('product')->get();
        return view('profile.Wish_List', compact('wishlistItems'));
    }

    public function addToWishlist(Product $product)
    {
        // Create a new WishlistItem for the authenticated user (if applicable)

        $wishlistItem = new Wishlist();
        $wishlistItem->user_id = auth()->id();
        $wishlistItem->product_id = $product->id;
        // $wishlistItem->user_id = auth()->id(); // Uncomment if authentication is used
        $wishlistItem->save();

        return redirect()->back()->with('success', 'Product added to wishlist!');
    }

    public function removeFromWishlist(Wishlist $Wishlist)
    {
        $Wishlist->delete();

        return redirect()->back()->with('success', 'Product removed from wishlist!');
    }
}
