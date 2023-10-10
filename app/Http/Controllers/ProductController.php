<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::with('shop')->get();
        return view ('dashboard/products/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shopNames=Shop::all();
    
        
    
         return view('dashboard.products.create',compact('shopNames'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new Product();

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif,webp |max:2048',
            'description' => 'required',
            'price' => 'required',

        ]);


        $products->name = $request->input('name');
        $products->description = $request->input('description');
       
        $products->price = $request->input('price');
        
       
        $shopNames = $request->input('shop_name');
        $shop_id = $request->input('shop_id');
        $products->shop_id = $shop_id;

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
                    $products->$imageField = $imageName;
                }
            }
        }
    

        $products->save();
        return redirect()->route('product.index')->with('success', 'product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop, $id)
    {
        // Find the shop by its ID
        $shop = Shop::find($id);
    
        if (!$shop) {
            abort(404);
        }
    
        // Retrieve all products associated with this shop
        $products = $shop->products;
    
        return view('website.ordermenue', compact('products'));
    }

    public function show_product( Product $product,$id)
    {
        // Find the product by its ID
        $product = Product::find($id);
    
        if (!$product) {
            abort(404);
        }
    
        return view('website.singleproduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
