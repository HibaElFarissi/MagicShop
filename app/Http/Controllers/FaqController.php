<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
// use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }

    public function index()
    {
        //
        $Faqs = Faq::all();
        $abouts = About::paginate(1);
        return view('faqs.index', compact('Faqs','abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Faqs = new Faq();
        $isUpdate = false;
        return view('faqs.form', compact('Faqs', 'isUpdate'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Faq::create($request->all());
        return to_route('faqs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $Faq = Faq::findOrFail($id);
        $isUpdate = true;
        return view('faqs.form', compact('Faq', 'isUpdate'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $Faq = Faq::findOrFail($id);
        $Faq->update($request->all());
        return to_route('faqs.index');

    }

    /**
     * Remove the specified resource from storage.
     */

     public function destroyAll()
    {
        Faq::truncate(); // Delete all records from the faqs table
        Alert::error('Successfully Deleted!', 'All FAQs have been deleted.');
        return redirect()->route('faqs.index');
    }

    public function destroy(string $id)
    {
        //
        $Faq=Faq::findOrFail($id);
        $Faq->delete();
        Alert::error('Successfully Deleted!', "The Faq has been Deleted");
        return to_route('faqs.index');
    }
}
