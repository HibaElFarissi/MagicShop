<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Feedback;
use App\Models\Quotes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $abouts = About::paginate(1);
        return view('abouts.index', compact('abouts'));
    }

    public function about(){
        $categories = Category::all();
        $brands = Brand::all();
        $abouts = About::paginate(1);
        $Faqs = Faq::all();
        $Quotes = Quotes::paginate(6);
        $feedbacks = Feedback::paginate(6);
        return view('pages.about',compact('categories', 'Faqs','abouts','Quotes','feedbacks','brands'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $abouts = new About();
        $about = new About();
        $isUpdate = false;
        return view('abouts.form', compact('about', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Title_Globale' => 'required',
            'description_Globale' => 'required',
            'Title1' => 'required',
            'description1' => 'required',
            'Mini_Title1' => 'required',
            'Slug1' => 'required',
            'Mini_Title2' => 'required',
            'Slug2' => 'required',
            'Title2' => 'required',
            'description2' => 'required',
            'image1' => 'nullable',
            'image2' => 'nullable',
            'TitleQuotes' => 'required',
            'SlugQuotes' => 'required',
            'TitleFacts' => 'required',
            'SlugFacts' => 'required',
            'TitleCategory' => 'required',
            'SlugCategory' => 'required',
            'TitleFaq' => 'required',
            'SlugFaq' => 'required',

        ]);

        // Method 1:

        // $file=$request->file('image1');
        // $image1=$request->filE('image1')->getClientOriginalName();
        // $file->storeAs('public',$image1);

        // $file=$request->file('image2');
        // $image2=$request->filE('image2')->getClientOriginalName();
        // $file->storeAs('public',$image2);

        // Method 2:
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('About_photos', 'public');
            $validatedData['image1'] = $image1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2')->store('About_photos', 'public');
            $validatedData['image2'] = $image2;
        }

        About::create($validatedData);


        Alert::success('succes', 'About has been added successfully');
        return to_route('abouts.index');
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
        $about = About::findOrFail($id);
        $isUpdate = true;
        return view('abouts.form', compact('isUpdate','about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $About)
    {
        //

        $validatedData = $request->validate([
            'Title_Globale' => 'required',
            'description_Globale' => 'required',
            'Title1' => 'required',
            'description1' => 'required',
            'Mini_Title1' => 'required',
            'Slug1' => 'required',
            'Mini_Title2' => 'required',
            'Slug2' => 'required',
            'Title2' => 'required',
            'description2' => 'required',
            'image1' => 'nullable',
            'image2' => 'nullable',
            'TitleQuotes' => 'required',
            'SlugQuotes' => 'required',
            'TitleFacts' => 'required',
            'SlugFacts' => 'required',
            'TitleCategory' => 'required',
            'SlugCategory' => 'required',
            'TitleFaq' => 'required',
            'SlugFaq' => 'required',

        ]);

        // Method 1:

        // $file=$request->file('image1');
        // $image1=$request->filE('image1')->getClientOriginalName();
        // $file->storeAs('public',$image1);

        // $file=$request->file('image2');
        // $image2=$request->filE('image2')->getClientOriginalName();
        // $file->storeAs('public',$image2);

        // Method 2:
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('About_photos', 'public');
            $validatedData['image1'] = $image1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2')->store('About_photos', 'public');
            $validatedData['image2'] = $image2;
        }

        $About->update($validatedData);


        Alert::success('succes', 'About has been updated successfully');
        return to_route('abouts.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $About=About::findOrFail($id);
        $About->delete();
        Alert::success('succes', 'About has been Deleted successfully');
        return to_route('abouts.index', compact('About'));


    }
}
