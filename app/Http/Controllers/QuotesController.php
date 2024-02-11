<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuotesRequest;
use App\Models\Quotes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $quotes = Quotes::all();
        return view('quotes.index', compact('quotes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Quotes = new Quotes();
        $isUpdate = false;
        return view('quotes.form', compact('Quotes', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $file=$request->file('image');
        $image=$request->filE('image')->getClientOriginalName();
        $file->storeAs('public',$image);


        // Validation
        $Quotes = Quotes::create([
            'title' => $request-> title,
            'description' => $request-> description,
            'image' => $image,

        ]);

        Alert::success('succes', 'the Quote has been added successfully');
        return to_route('quotes.index');

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
        $isUpdate = true;
        $Quotes = Quotes::all();

        return view('quotes.form', compact('Quotes', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // $Quotes->fill($request->validated());
        // $fromFields['image']=$this->uploadImage($request);
        // $Quotes->fill($fromFields)->save();

        //     Alert::success('Successfully Updated!', "The Quotes {$Quotes->name} has been updated");
        //     return to_route('quotes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
