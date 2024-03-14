<?php

namespace App\Http\Controllers;



use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   // public function __construct()
    // {

    //     $this->middleware(['auth','role:admin'])->except(['show','search']);

    // }
    // public function search(Request $request){
    //     $search =  $request->input('search');
    //     $Articles= Article::where(function($query) use($search){
    //         $query->where('title', 'like', "%$search%");
    //     })->get();
    //     return view('pages.Article', compact('Articles','search'));
    // }
    public function index()
    {
        $Articles=Article::all();
       
        return view('Articles.index' , compact('Articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories=Category::all();
        return view('Articles.create',compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
   
            'text'=> 'required',
           
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
          
            'Categorie_id'=>'required',
        ]);

        // $validatedData=$request->all();
        $validatedData['user_id'] = Auth::id();

         // Handle photo1 upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('Articles', 'public');
            $validatedData['photo'] = $photoPath;
        }
       
        Article::create($validatedData);
    
        return redirect()->route('Articles.index');
    }
    
      /**
     * Display the specified resource.
      */

    public function show(string $id)
     {
    //     $Categories=Category::all();
    //     $Categories = Category::withCount('blog')->get();
    //     $ARTICLES=Article::paginate(2);
    //     $Post=Article::paginate(4);
    //     $Article = Article::findOrFail($id);
      
    //     return view('Articles.show', compact('Article','ARTICLES','Post','Categories', 'Settings')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Article = Article::findOrFail($id);
        $Categories = Category::all();
        return view('Articles.edit', compact('Article','Categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validatedData=$request->validate([
            'title'=> 'required',
   
            'text'=> 'required',
           
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
          
            'Categorie_id'=>'required'
        ]);
        $validatedData['user_id'] = Auth::id();
        $Article=Article::findOrFail($id);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Articles','public');
            $validatedData['photo']=$photoPath;
        }
       
        $Article->update($validatedData);
     
        return to_route('Articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::findOrFail($id)->delete();
        return to_route('Articles.index');
    }
}
