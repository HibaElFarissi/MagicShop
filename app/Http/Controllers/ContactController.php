<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    //
    public function index(){

        $categories = Category::all();
        $contacts = Contact::get();
        return view('Email.inbox', compact('contacts', 'categories'));
    }



    public function create(){
        $cartIcon = Product::withCount('cartItems')->get();
        $totalCartCount = $cartIcon->sum('cart_items_count');
        $categories = Category::all();
        $contact = new Contact();
        $infos = Infos::get();
        return view('pages.contact',compact('categories','contact','infos','cartIcon','totalCartCount'));



    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back();
    }




    public function destroy(string $id)
    {
        //
        $contact=Contact::findOrFail($id);
        $contact->delete();
        Alert::error('Successfully Deleted!', "The Email has been Deleted");
        return redirect()->back();
    }
}


