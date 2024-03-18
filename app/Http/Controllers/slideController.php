<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class slideController extends Controller
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
        //
        $slides = Slide::all();
        return view('slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $slide = new Slide();
        $isUpdate = false;
        return view('slides.form', compact('slide', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('slide_images'), $imageName);
                $imagePaths[] = $imageName;
            }

            $validatedData['images'] = json_encode($imagePaths);
        }

        Slide::create($validatedData);

        Alert::success('succes', 'The new image has been added successfully');
        return to_route('slides.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //vu
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $isUpdate = true;
        $slide = Slide::findOrFail($id);
        return view('slides.form', compact('slide', 'isUpdate'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('slide_images'), $imageName);
                $imagePaths[] = $imageName;
            }

            $validatedData['images'] = json_encode($imagePaths);
        }

        $slide = Slide::findOrFail($id);
        $slide->update($validatedData);


        Alert::success('Successfully Updated!', "The image has been updated sucessfully");
        return to_route('slides.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        //
        $slide->delete();
        Alert::error('Deleted!', "The image has been deleted");
        return to_route('slides.index');
    }
}
