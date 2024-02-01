<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AboutController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('pages.about',compact('categories'));
    }
}
