<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class DashAdmin_navController extends Controller
{
    //
    public function index(){
        $abouts = About::paginate(1);
        return view('layouts.DashAdmin_nav', compact('abouts'));
    }
}
