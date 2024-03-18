<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TagsController extends Controller
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
        $Tags=Tag::all();
        return view('Tags.index' , compact('Tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tags.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);




        Tag::create($validatedData);

        Alert::success('success', 'The Tag has been added successfully');
        return redirect()->route('Tags.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Tag = Tag::findOrFail($id);
        return view('Tags.edit', compact('Tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',



        ]);
        $Tag=Tag::findOrFail($id);
        $Tag->update($validatedData);

        Alert::success('success', 'The Tag has been Updated successfully');
        return to_route('Tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::findOrFail($id)->delete();
        Alert::error('Deleted!', "The Tag has been deleted");
        return to_route('Tags.index');
    }

}
