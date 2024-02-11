<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('pages.blog-details',compact('categories'));
    }
}
