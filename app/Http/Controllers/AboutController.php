<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
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
        $categories = Category::all();
        $abouts = About::paginate(1);
        $Faqs = Faq::all();
        $Quotes = Quotes::paginate(6);
        $feedbacks = Feedback::paginate(6);
        return view('pages.about',compact('categories', 'Faqs','abouts','Quotes','feedbacks'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Abouts = new About();
        $isUpdate = false;
        return view('abouts.form', compact('Abouts', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //   About::create($request->all());
        //   return to_route('abouts.index');


        $file=$request->file('image1');
        $image1=$request->filE('image1')->getClientOriginalName();
        $file->storeAs('public',$image1);

        $file=$request->file('image2');
        $image2=$request->filE('image2')->getClientOriginalName();
        $file->storeAs('public',$image2);

        // $file=$request->file('image3');
        // $image3=$request->filE('image3')->getClientOriginalName();
        // $file->storeAs('public',$image3);


        // Validation
        $about = About::create([
            'Title_Globale' => $request-> Title_Globale,
            'description_Globale' => $request-> description_Globale,
            'Title1' => $request-> Title1,
            'description1' => $request-> description1,
            'Mini_Title1' => $request-> Mini_Title1,
            'Slug1' => $request-> Slug1,
            'Mini_Title2' => $request-> Mini_Title2,
            'Slug2' => $request-> Slug2,
            'Title2' => $request-> Title2,
            'description2' => $request-> description2,
            'TitleQuotes' => $request-> TitleQuotes,
            'SlugQuotes' => $request-> SlugQuotes,
            'TitleCategory' => $request-> TitleCategory,
            'SlugCategory' => $request-> SlugCategory,
            'TitleFaq' => $request-> TitleFaq,
            'SlugFaq' => $request-> SlugFaq,
            'image1' => $image1,
            'image2' => $image2 ,
            // 'image3' => $image3 ,

        ]);


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
    public function edit($id)
    {
        $Abouts=About::findOrFail($id);
        $isUpdate = true;
        return view('abouts.form', compact('isUpdate', 'Abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $About)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
