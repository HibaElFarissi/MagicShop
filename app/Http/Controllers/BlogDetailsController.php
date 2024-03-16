<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    //
    public function index(){
        $cartIcon = Product::withCount('cartItems')->get();
        $totalCartCount = $cartIcon->sum('cart_items_count');
        $infos = Infos::paginate(1);
        $categories = Category::all();
        return view('pages.blog-details',compact('categories','infos','cartIcon','totalCartCount'));
    }
}
