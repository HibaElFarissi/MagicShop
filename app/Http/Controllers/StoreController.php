<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Infos;
use App\Models\Product;
use App\Models\Slide;
use App\Models\CartItem;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StoreController extends Controller
{


    public function search(Request $request){
        $search =  $request->input('search');
        $brands = Brand::all();
        $banners = Banner::paginate(1);
        $slides = Slide::all();
        $categories = Category::all();
        $infos = Infos::paginate(1);
        $products = Product::query()->orderBy('created_at', 'desc')->limit(8)->get();
        $Products= Product::where(function($query) use($search){
            $query->where('name', 'like', "%$search%");
        })->get();
        return view('store.index', compact('Products','search','slides','brands','banners','categories','infos','products'));
    }

    public function index()
        {
            $brands = Brand::all();
            $cartIcon = Product::withCount('cartItems')->get();
            $totalCartCount = $cartIcon->sum('cart_items_count'); // Sum up the cart counts of all products
            $banners = Banner::paginate(1);
            $slides = Slide::all();
            $categories = Category::all();
            $infos = Infos::paginate(1);
            $products = Product::query()->orderBy('created_at', 'desc')->limit(8)->get();
            return view('store.index', compact('products', 'categories','brands','banners','slides','infos','totalCartCount'));
        }

    public function create()
    {
        //
        $product = new Product();
        $product->fill([
            'quantity' => 0,
        ]);
        $isUpdate = false;
        return view('products.form', compact('product', 'isUpdate'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {


        $fromFields = $request->validated();
        if ($request->hasFile('image')) {
            // $fromFields['image'] = $request->file('image')->store('product' , 'public');
            $fromFields['image']=$this->uploadImage($request);
        }

        Product::create($fromFields);

        Alert::success('succes', 'Product has been added successfully');
        return to_route('products.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        $isUpdate = true;
        return view('products.form', compact('product', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
        $product->fill($request->validated());
        $fromFields['image']=$this->uploadImage($request);
        $product->fill($fromFields)->save();
        // $product=Product::findOrFail($product);

        // $product=Product::findOrFail($id);
        // if($request->hasFile('photo')){
            //     $photoPath = $request->file('photo')->store('product','public');
            //     $validatedData['photo']=$photoPath;
            // }
            //  $product->update($product);

            // Alert::success('succes', 'Product has been updated successfully');
            Alert::success('Successfully Updated!', "The product {$product->name} has been updated");
            return to_route('products.index');

    }

    private function uploadImage(ProductRequest $request){
        if($request->hasFile('image')){
           return $request->file('image')->store('product' , 'public');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        Alert::success('Successfully Deleted!', "The product {$product->name} has been Deleted");
        return to_route('products.index');
    }
}
