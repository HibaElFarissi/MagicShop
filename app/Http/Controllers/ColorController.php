<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Colors=Color::all();
        return view('Color.index',compact('Colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required',
            'status'=>'required',
            'code'=>'required',

        ]);


        Color::create($validatedData);
        return to_route('Color.index');
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
        $Color = Color::findOrFail($id);
        return view('Color.edit', compact('Color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=>'required',
            'status'=>'required',
            'code'=>'required',
        ]);
        $Color=Color::findOrFail($id);
        $Color->update($validatedData);
        return to_route('Color.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Color::findOrFail($id)->delete();
        return to_route('Color.index');
    }
}
