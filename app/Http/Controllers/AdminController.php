<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Faq;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function AdminDashboard(){
        $Faqs = Faq::all();
        $abouts = About::paginate(1);
        return view('admin.admin_dashboard', compact('Faqs','abouts'));
    }
}
