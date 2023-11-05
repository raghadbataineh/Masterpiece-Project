<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Product;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews=Review::all();
        
        return view ('dashboard/review.index' , compact('reviews'));
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
        $this->validate($request, [
            'rating' => 'required|integer|min:1|max:5', // Adjust validation rules as needed
            'review' => 'required|string',
        ]);

        $review = new Review();
        $review->user_id = auth()->id(); // Assuming you have user authentication
        $review->product_id = $request->product_id; // Set the product_id from the request

        $review->rating = $request->rating;
        $review->comment = $request->review;
        $review->save();

        // You can also associate the review with a product, assuming a relationship is set up

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
    

    /**
     * Display the specified resource.
     */
   
     public function show()
     {
         // $product = Product::findOrFail($id);
         // $reviews = $product->reviews; 
         $reviews = Review::all();
     
         return view('website.singleproduct', compact('reviews'));
     }
     

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
