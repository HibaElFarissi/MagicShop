<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Infos;
use App\Models\Banner;
use App\Models\Article;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $Articles = Article::paginate(1);
        $All_Articles = Article::all();
        $cartIcon = Product::withCount('cartItems')->get();
        $totalCartCount = $cartIcon->sum('cart_items_count');
        $banners = Banner::paginate(1);
        $infos = Infos::paginate(1);
        $categories = Category::all();
        $last_categories = Category::paginate(6);
        $Tags = Tag::all();
        return view('pages.blog',compact('categories','last_categories','banners','infos','Tags','totalCartCount','cartIcon','All_Articles','Articles'));
    }
}
