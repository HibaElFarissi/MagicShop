<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
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
        return view('pages.contact',compact('categories','contact'));



    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back();
    }


    // public function sendEmail(Request $request)
    // {
    //     $request->validate([
    //       'email' => 'required|email',
    //       'subject' => 'required',
    //       'name' => 'required',
    //       'content' => 'required',
    //     ]);

    //     $data = [
    //       'subject' => $request->subject,
    //       'name' => $request->name,
    //       'email' => $request->email,
    //       'content' => $request->content
    //     ];

    //     Mail::send('email-template', $data, function($message) use ($data) {
    //       $message->to($data['email'])
    //       ->subject($data['subject']);
    //     });

    //     Alert::success('message','Email successfully sent!');
    //     return back();

    // }

    public function destroy(string $id)
    {
        //
        $contact=Contact::findOrFail($id);
        $contact->delete();
        Alert::success('Successfully Deleted!', "The Email has been Deleted");
        return redirect()->back();
    }
}


