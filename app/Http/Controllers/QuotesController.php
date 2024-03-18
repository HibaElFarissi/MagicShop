<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuotesRequest;
use App\Models\About;
use App\Models\Quotes;
use Illuminate\Http\Request;
use League\CommonMark\Extension\SmartPunct\Quote;
use RealRashid\SweetAlert\Facades\Alert;

class QuotesController extends Controller
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
        $Quotes = Quotes::all();
        $abouts = About::paginate(1);
        return view('quotes.index', compact('Quotes', 'abouts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Quotes = new Quotes();
        $isUpdate = false;
        return view('quotes.form', compact('Quotes', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'nullable|image|mimes:png,jpg|max:2048',
        ]);

        if($request->hasFile('image')){
            $photoPath = $request->file('image')->store('Quotes','public');
        }
        $validatedData['image']=$photoPath;
        // $validatedData['user_id'] = Auth::id();
        Quotes::create($validatedData);
        Alert::success('Successfully Added!', "The Quote has been Added");
        return to_route('quotes.index');

        // it's working too
        // $file=$request->file('image');
        // $image=$request->filE('image')->getClientOriginalName();
        // $file->storeAs('public',$image);


        // $Quotes = Quotes::create([
        //     'title' => $request-> title,
        //     'description' => $request-> description,
        //     'image' => $image,

        // ]);

        // Alert::success('succes', 'the Quote has been added successfully');
        // return to_route('quotes.index');

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
    public function edit(Quotes $quote)
    {
        //
         $isUpdate = true;
        // $Quotes = Quotes::all();
        // $quote = Quotes::findOrFail($id);

        return view('quotes.form', compact('quote', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'nullable|image|mimes:png,jpg|max:2048',

        ]);

        $quote=Quotes::findOrFail($id);
        if($request->hasFile('image')){
            $photoPath = $request->file('image')->store('Quotes','public');
            $validatedData['image']=$photoPath;
        }
        $quote->update($validatedData);
        Alert::success('Successfully Updated!', "The Quote {$quote->name} has been updated");
        return to_route('quotes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $quote=Quotes::findOrFail($id);
        $quote->delete();
        Alert::success('Successfully Deleted!', "The feedback {$quote->name} has been Deleted");
        return to_route('quotes.index');
    }
}
