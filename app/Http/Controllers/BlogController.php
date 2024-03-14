<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Infos;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $banners = Banner::paginate(1);
        $infos = Infos::paginate(1);
        $categories = Category::all();
        $last_categories = Category::paginate(6);
        $Tags = Tag::all();
        return view('pages.blog',compact('categories','last_categories','banners','infos','Tags'));
    }
}
