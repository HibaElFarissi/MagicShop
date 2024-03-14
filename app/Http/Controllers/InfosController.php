<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Infos;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InfosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $infos = Infos::paginate(1);
        $contacts = Contact::get();
        return view('infos.index', compact('infos','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $info = new Infos();
        $isUpdate = false;
        return view('infos.form', compact('info', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData=$request->validate([
            'title'=>'required',
            'adresse'=>'required',
            'email'=>'required',
            'phoneNumber'=>'required',
            'LinkIframeMap' => 'required',
        ]);

        Infos::create($validatedData);
        Alert::success('succes', 'the Informations have been added successfully');
        return to_route('infos.index');
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
        $info=Infos::findOrFail($id);
        $isUpdate = true;
        return view('infos.form', compact('info', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData=$request->validate([
            'title'=>'required',
            'adresse'=>'required',
            'email'=>'required',
            'phoneNumber'=>'required',
            'LinkIframeMap' => 'required',
        ]);

        $info=Infos::findOrFail($id);
        $info->update($validatedData);
        Alert::success('succes', 'the Informations have been updated successfully');
        return to_route('infos.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $info=Infos::findOrFail($id);
        $info->delete();
        Alert::success('Successfully Deleted!', "The informations have been Deleted");
        return to_route('infos.index');
    }
}
