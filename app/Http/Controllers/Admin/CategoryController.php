<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Infos;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin'])->except(['Afficher']);

    }


    public function index()
    {
        //
        $categories = Category::query()->paginate(4);
        $infos = Infos::paginate(1);
        return view('categories.index', compact('categories','infos'));
    }

    /**
     * Show the form for creating a new resource:
     */
    public function create()
    {
        //
        $category = new Category();
        $isUpdate = false;
        return view('categories.form', compact('category', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage:
     */
    public function store(CategoryRequest $request)
    {

        $fromFields = $request->validated();
            if ($request->hasFile('image')) {
            // $fromFields['image'] = $request->file('image')->store('product' , 'public');
            $fromFields['image']=$this->uploadImage($request);
        }
        //
        // $request->validate([
        //     'name' => 'required|max:255',
        //   ]);

          Category::create($fromFields);
          Alert::success('succes', 'Category has been added successfully');
          return to_route('categories.index');

    }


    /**
     * Display the specified resource:
     */
    public function show(Category $category)
    {
        //
       $products =  $category->products()->get();
       $infos = Infos::paginate(1);
       return view('categories.show', compact('category', 'products','infos'));
    }


    public function Afficher(Request $request, string $id)
    {
        //
        $category = Category::findOrfail($id);
       $products =  $category->products()->get();
       $last_categories = Category::paginate(6);
       $categories = Category::all();
       $infos = Infos::paginate(1);
       $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
       return view('pages.products-category', compact( 'products','infos','last_categories','categories','totalCartCount','category'));
    }



    public function edit(Category $category)
    {
        //
        $isUpdate = true;
        return view('categories.form', compact('category', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage:
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->validated());
        $fromFields['image']=$this->uploadImage($request);
        $category->fill($fromFields)->save();

        Alert::success('succes', "The Category {$category->name}  has been updated successfully");
        return to_route('categories.index', compact('category'));
    }


    private function uploadImage(CategoryRequest $request){
        if($request->hasFile('image')){
           return $request->file('image')->store('category' , 'public');
        }
    }

    /**
     * Remove the specified resource from storage:
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        Alert::success('Successfully Deleted!', "The Category {$category->name} has been Deleted");
        return to_route('categories.index');
    }

    // public function transfer(Product $product)
    // {
    //     //
    //     $product->delete();
    //     Alert::success('Successfully Deleted!', "The Category {$product->name} has been Deleted");
    //     return to_route('categories.show');
    // }
}
