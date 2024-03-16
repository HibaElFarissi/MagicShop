<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Infos;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function  index(){
        $cartIcon = Product::withCount('cartItems')->get();
        $totalCartCount = $cartIcon->sum('cart_items_count');
        $products = Product::all();
        $infos = Infos::paginate(1);
        $new_products = Product::paginate(2);
        $last_categories = Category::paginate(6);
        $categories = Category::all();
        $Tags = Tag::all();
        return view('pages.shop',compact('products','categories','new_products','last_categories','infos','Tags','cartIcon','totalCartCount'));
    }

}
