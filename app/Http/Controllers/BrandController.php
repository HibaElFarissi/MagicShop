<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }

    public function index()
    {
        $brands=Brand::all();
        return view('Brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(){

        $isUpdate = false;
        $brand = new Brand();
        return view('Brands.form', compact('isUpdate', 'brand'));
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
        Alert::success('succes', 'Brand has been added successfully');
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
        return view('Brands.form', compact('brand','isUpdate'));
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
        Alert::success('Successfully Updated!', "The Brand has been updated");
        return to_route('Brands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $brand=Brand::findOrFail($id);
        $brand->delete();
        Alert::error('Successfully Deleted!', "The brand has been deleted.");
        return to_route('Brands.index',compact('brand'));

        // $brand->delete();
        // Alert::success('Successfully Deleted!', "The Brand has been Deleted");
        // return to_route('Brands.index', compact('brand'));
    }
}
