<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ColorController extends Controller
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
        $Colors=Color::all();
        return view('Color.index',compact('Colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $isUpdate = false;
        $Color = new Color();
        Alert::success('Successfully Deleted!', "The Color has been Added");
        return view('Color.form', compact('isUpdate', 'Color'));
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
        $isUpdate = true;
        $Color = Color::findOrFail($id);
        return view('Color.form', compact('Color', 'isUpdate'));
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

        Alert::success('Successfully Updated!', "The Color has been updated");
        return to_route('Color.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Color::findOrFail($id)->delete();
        Alert::error('Deleted!', "The Color has been Deleted");
        return to_route('Color.index');
    }
}
