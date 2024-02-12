<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function AdminDashboard(){
        $Faqs = Faq::all();
        return view('admin.admin_dashboard', compact('Faqs'));
    }
}
