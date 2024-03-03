<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('pages.checkout', compact('categories'));
    }
}
