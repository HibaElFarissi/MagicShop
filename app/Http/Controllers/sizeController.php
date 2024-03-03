<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Sizes=Size::all();
        return view('sizes.index',compact('Sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required',
            'status'=>'required',


        ]);


        Size::create($validatedData);
        return to_route('sizes.index');
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
        $Size = Size::findOrFail($id);
        return view('sizes.edit', compact('Size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=>'required',
            'status'=>'required',

        ]);
        $Size=Size::findOrFail($id);
        $Size->update($validatedData);
        return to_route('sizes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Size::findOrFail($id)->delete();
        return to_route('sizes.index');
    }
}
