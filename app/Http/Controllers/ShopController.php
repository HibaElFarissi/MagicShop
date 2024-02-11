<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function  index(){
        $products = Product::all();
        $new_products = Product::paginate(2);
        $last_categories = Category::paginate(6);
        $categories = Category::all();
        return view('pages.shop',compact('products','categories','new_products','last_categories'));
    }

}
