<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // app/Http/Controllers/ReviewController.php
    public function __construct()
    {

        $this->middleware('auth');

    }

public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'rating' => 'required|integer|min:1|max:5',
        'content' => 'required|string',
    ]);

    $review = new Review([
        'user_id' => auth()->id(),
        'product_id' => $request->product_id,
        'content' => $request->content,
        'rating' => $request->rating,
    ]);

    $review->save();

    return back()->with('success', 'Thank you for your review.');
}


}
