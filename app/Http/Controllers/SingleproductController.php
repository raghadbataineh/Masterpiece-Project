<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SingleproductController extends Controller
{

    
public function index()
{
    $products=Product::with('shop')->get();
    return view ('dashboard/products/index',compact('products'));
}

public function create()
{
    // $shopNames=Shop::all();

    

    //  return view('dashboard.products.create',compact('shopNames'));
}



    public function show( $id)
{
    // Find the product by its ID
    $product = Product::find($id);

    if (!$product) {
        abort(404);
    }

    return view('website.singleproduct', compact('product'));
}
}







