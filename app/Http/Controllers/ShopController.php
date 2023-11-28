<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Category;
use App\Models\Floor;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::all(); 
  
        return view ('dashboard/shops/index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){

    $categoryNames=Category::all();
    $floorNames=Floor::all();

    // $categoryNames=::all();
    

        return view('dashboard.shops.create',compact('categoryNames','floorNames'));
    

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


        $shops->name = $request->input('name');
        $shops->description = $request->input('description');
        // $shops->floor = $request->input('floor');
        // $shops->category = $request->input('category');
        $shops->location = $request->input('location');
        $shops->phone = $request->input('phone');
        $shops->opening_hours = $request->input('open');
        $shops->hasproducts = $request->input('hasproducts');

        $categoryNames = $request->input('category_name');
        $category_id = $request->input('category_id');
        $shops->category_id = $category_id;

        $floorNames = $request->input('floor_name');
        $floor_id = $request->input('floor_id');
        $shops->floor_id = $floor_id;


        if ($request->hasFile('image')) {
            $images = [$request->file('image'), $request->file('image1'), $request->file('image2'), $request->file('image3')];
            foreach ($images as $key => $image) {
                // Define the allowed image columns in your database
                $allowedColumns = ['image', 'image1', 'image2', 'image3'];
        
                if ($image && isset($allowedColumns[$key])) {
                    $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images'), $imageName);
        
                    // Save the image's file name to the corresponding column
                    $imageField = $allowedColumns[$key];
                    $shops->$imageField = $imageName;
                }
            }
        }
    

        $shops->save();
        return redirect()->route('shop.index')->with('success', 'shop created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shops , $id)
    {
        
        $shops = Shop::find($id);

        // Check if the category was found
        if (!$shops) {
            abort(404);
        }
    
        // Load the shops associated with this category
        // $shops = $category->shops;
    
        // Load the category details view and pass the category and shops data to it
        return view('website.single page', compact( 'shops'));
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        $floors = Floor::all(); // Assuming you have a Floor model

        $categoryNames=Category::all();
        $floorNames=Floor::all();

    
        return view('dashboard.shops.edit', compact('categoryNames', 'shop', 'floors' , 'floorNames'));
        
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        //     'floor_id' => 'required', // Add other validation rules as needed
        //     'category_id' => 'required',
        //     'location' => 'required',
        //     'phone' => 'required',
        //     'open' => 'required',
        // ]);
    
        $shops = Shop::findOrFail($id);
    
        $shops->name = $request->input('name');
        $shops->description = $request->input('description');
        $shops->floor_id = $request->input('floor_id');
        $shops->category_id = $request->input('category_id');
        $shops->location = $request->input('location');
        $shops->phone = $request->input('phone');
        $shops->opening_hours = $request->input('open');
        $shops->hasproducts = $request->input('hasproducts');
        $categoryNames = $request->input('category_name');
        $floorNames = $request->input('floor_name');
        $floor_id = $request->input('floor_id');
        $shops->floor_id = $floor_id;
        $category_id = $request->input('category_id');
        $shops->category_id = $category_id;

       
        if ($request->hasFile('image')) {
            $images = [$request->file('image'), $request->file('image1'), $request->file('image2'), $request->file('image3')];
            foreach ($images as $key => $image) {
                // Define the allowed image columns in your database
                $allowedColumns = ['image', 'image1', 'image2', 'image3'];
        
                if ($image && isset($allowedColumns[$key])) {
                    $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images'), $imageName);
        
                    // Save the image's file name to the corresponding column
                    $imageField = $allowedColumns[$key];
                    $shops->$imageField = $imageName;
                }
            }
        }
    
        $shops->save();
    
        return redirect()->route('shop.index')->with('success', 'Shop updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Shop::destroy($id);
        return back()->with('success', 'Shop deleted successfully.');
    }
}
