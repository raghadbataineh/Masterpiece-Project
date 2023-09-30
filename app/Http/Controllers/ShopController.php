<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::all(); 
        // $category = $shop->category;
        // $category = Shop::with('category')->get();
        // $shopsWithCategories = Shop::with('category')->get();


        // $floor = $shop->floor;
        return view ('dashboard/shops/index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shops.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shops = new Shop();

        // $request->validate([
        //     'title' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif,webp |max:2048',
        //     'description' => 'required',
        //     'price' => 'required',

        // ]);

        $shops->title = $request->input('name');
        $shops->description = $request->input('description');
        $shops->price = $request->input('price');
        $categoryNames = $request->input('category_name');
        $category_id = $request->input('category_id');
        $shops->category_id = $category_id;



        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $shops->image = $imageName;

        }

        $shops->save();
        return redirect()->route('shop.index')->with('success', 'shop created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
