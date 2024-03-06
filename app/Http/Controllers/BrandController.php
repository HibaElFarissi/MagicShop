<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands=Brand::all();
        return view('Brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isUpdate = false;
        return view('Brands.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required',
            'slug'=>'required',
            'image'=>'nullable|image|mimes:png,jpg|max:2048',
        ]);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('Brands','public');
        }
        $validatedData['image']=$imagePath;
        Brand::create($validatedData);
        return to_route('Brands.index');
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
        $isUpdate = true;
        $brand = Brand::findOrFail($id);
        return view('Brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=>'required',
            'slug'=>'required',
            'image'=>'nullable|image|mimes:png,jpg|max:2048',
        ]);
        $brand=Brand::findOrFail($id);
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('Brands','public');
            $validatedData['image']=$imagePath;
        }
        $brand->update($validatedData);
        return to_route('Brands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::findOrFail($id)->delete();
        return to_route('Brands.index');
    }
}
