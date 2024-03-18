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
    public function  index(Request $request){
       $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $products = Product::all();
        $infos = Infos::paginate(1);
        $new_products = Product::paginate(2);
        $last_categories = Category::paginate(6);
        $categories = Category::all();
        $Tags = Tag::all();
        return view('pages.shop',compact('products','categories','new_products','last_categories','infos','Tags','totalCartCount'));
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
            $search =  $request->input('search');
            $products= Product::where(function($query) use($search){
                $query->where('name', 'like', "%$search%");
            })->get();
            return view('pages.shop', compact('products','categories','new_products','last_categories','infos','Tags','totalCartCount','search'));
        }

}
