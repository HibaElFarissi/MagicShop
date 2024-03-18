<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SizeController extends Controller
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
        $Sizes=Size::all();
        return view('sizes.index',compact('Sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isUpdate = false;
        $Size = new Size();
        Alert::success('Successfully!', "The Size has been Added");
        return view('sizes.form',compact('isUpdate','Size'));
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
        $isUpdate = true;
        $Size = Size::findOrFail($id);
        return view('sizes.form', compact('Size', 'isUpdate'));
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
        Alert::success('Successfully!', "The Size has been Updated");
        return to_route('sizes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        // Size::findOrFail($id)->delete();
        // return redirect('sizes.index');
        $size->delete();
        Alert::error('Deleted!', "The Size has been Deleted");
        return to_route('sizes.index');
    }
}
