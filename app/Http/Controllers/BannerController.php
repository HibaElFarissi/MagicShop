<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banners = Banner::get();
        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $banner = new Banner();
        $isUpdate = false;
        return view('banners.form', compact('banner', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'Title1' => 'required',
            'Slug1' => 'required',
            'Title2' => 'required',
            'Slug2' => 'required',
            'Title3' => 'required',
            'Slug3' => 'required',
            'Title4' => 'required',
            'Slug4' => 'required',
            'Title5' => 'required',
            'Slug5' => 'required',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image6' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image7' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image8' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Method 2:
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('Banner_photos', 'public');
            $validatedData['image1'] = $image1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2')->store('Banner_photos', 'public');
            $validatedData['image2'] = $image2;
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3')->store('Banner_photos', 'public');
            $validatedData['image3'] = $image3;
        }

        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4')->store('Banner_photos', 'public');
            $validatedData['image4'] = $image4;
        }

        if ($request->hasFile('image5')) {
            $image5 = $request->file('image5')->store('Banner_photos', 'public');
            $validatedData['image5'] = $image5;
        }

        if ($request->hasFile('image6')) {
            $image6 = $request->file('image6')->store('Banner_photos', 'public');
            $validatedData['image6'] = $image6;
        }

        if ($request->hasFile('image7')) {
            $image7 = $request->file('image7')->store('Banner_photos', 'public');
            $validatedData['image7'] = $image7;
        }

        if ($request->hasFile('image8')) {
            $image8 = $request->file('image8')->store('Banner_photos', 'public');
            $validatedData['image8'] = $image8;
        }

        Banner::create($validatedData);

        Alert::success('succes', 'The Banners have been added successfully');
        return to_route('banners.index');
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
        $banner = Banner::findOrFail($id);
        $isUpdate = true;
        return view('banners.form', compact('isUpdate','banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
        $validatedData = $request->validate([
            'Title1' => 'required',
            'Slug1' => 'required',
            'Title2' => 'required',
            'Slug2' => 'required',
            'Title3' => 'required',
            'Slug3' => 'required',
            'Title4' => 'required',
            'Slug4' => 'required',
            'Title5' => 'required',
            'Slug5' => 'required',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image6' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image7' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image8' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Method 2:
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('Banner_photos', 'public');
            $validatedData['image1'] = $image1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2')->store('Banner_photos', 'public');
            $validatedData['image2'] = $image2;
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3')->store('Banner_photos', 'public');
            $validatedData['image3'] = $image3;
        }

        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4')->store('Banner_photos', 'public');
            $validatedData['image4'] = $image4;
        }

        if ($request->hasFile('image5')) {
            $image5 = $request->file('image5')->store('Banner_photos', 'public');
            $validatedData['image5'] = $image5;
        }

        if ($request->hasFile('image6')) {
            $image6 = $request->file('image6')->store('Banner_photos', 'public');
            $validatedData['image6'] = $image6;
        }

        if ($request->hasFile('image7')) {
            $image7 = $request->file('image7')->store('Banner_photos', 'public');
            $validatedData['image7'] = $image7;
        }

        if ($request->hasFile('image8')) {
            $image8 = $request->file('image8')->store('Banner_photos', 'public');
            $validatedData['image8'] = $image8;
        }

        $banner->update($validatedData);

         Alert::success('succes', 'The Banners have been Updated successfully');
         return to_route('banners.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $banner = Banner::findOrFail($id);
        $banner -> delete();
        Alert::error('Deleted!', 'The banners have been Deleted successfully');
        return to_route('banners.index', compact('banner'));

    }
}
