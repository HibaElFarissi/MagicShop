<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Infos;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $contacts = Contact::get();
        return view('Email.inbox', compact('contacts', 'categories'));
    }



    public function create(){
        $categories = Category::all();
        $contact = new Contact();
        $infos = Infos::get();
        return view('pages.contact',compact('categories','contact','infos'));



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


