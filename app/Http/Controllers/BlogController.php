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
    public function index(Request $request){
        $Articles = Article::paginate(1);
        $Article = Article::all();
        $All_Articles = Article::all();
         $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $banners = Banner::paginate(1);
        $infos = Infos::paginate(1);
        $categories = Category::all();
        $last_categories = Category::paginate(6);
        $Tags = Tag::all();
        return view('pages.blog',compact('categories','last_categories','banners','infos','Tags','totalCartCount','All_Articles','Articles','Article'));
    }

    public function search(Request $request){
         $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $infos = Infos::paginate(1);
        $new_products = Product::paginate(2);
        $last_categories = Category::paginate(6);
        $categories = Category::all();
        $Tags = Tag::all();
        $banners = Banner::paginate(1);
        $search =  $request->input('search');
        $All_Articles = Article::where(function($query) use($search){
            $query->where('title', 'like', "%$search%");
        })->get();
        $search =  $request->input('search');
        $Articles= Article::where(function($query) use($search){
            $query->where('title', 'like', "%$search%");
        })->get();
        return view('pages.blog', compact('categories','new_products','last_categories','infos','Tags','totalCartCount','search','Articles','All_Articles','banners'));
    }
}
