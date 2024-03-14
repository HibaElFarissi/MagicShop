<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Infos;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    //
    public function index(){
        $infos = Infos::paginate(1);
        $categories = Category::all();
        return view('pages.blog-details',compact('categories','infos'));
    }
}
