<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MoreCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartIcon = Product::withCount('cartItems')->get();
        $totalCartCount = $cartIcon->sum('cart_items_count');
        $categories = Category::all();
        $infos = Infos::paginate(1);
        $last_categories = Category::paginate(6);
        return view('categories.more-Category',compact('categories','last_categories','infos','cartIcon','totalCartCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
