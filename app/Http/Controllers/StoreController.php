<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Infos;
use App\Models\Product;
use App\Models\Slide;
use App\Models\CartItem;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StoreController extends Controller
{

    public function index(Request $request)
    {
        $brands = Brand::all();
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $banners = Banner::paginate(1);
        $slides = Slide::all();
        $categories = Category::all();
        $infos = Infos::paginate(1);
        $products = Product::query()->orderBy('created_at', 'desc')->limit(8)->get();
        return view('store.index', compact('products', 'categories', 'brands', 'banners', 'slides', 'infos', 'totalCartCount'));
    }

}
