<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;


use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $carts=Cart::all();
        
        return view ('dashboard/carts.index' , compact('carts'));
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
    public function store(Request $request) {
        // $product = Product::find($productId);
        // if (!$product) {
        // }
    
        // $cart = session('cart', []);
    
        // $cartItem = [
        //     'product_id' => $product->id,
        //     'name' => $product->name,
        //     'price' => $product->price,
        //     'quantity' => 1, 
        // ];
    
        // $cart[] = $cartItem;
    
        // session(['cart' => $cart]);
        return view ('website.cart');
    
        // Redirect or return a response
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
    public function back_cart()
    {
        
        if (auth()->user()) {
            $user= auth()->user();
        
            $cart = Cart::where('user_id', $user->id)->with('product')->get();
        }
        else{
        
            $cart = session('cart');
        
        }
        
        
        // dd(isset($cart->product));
      return view('website.cart',compact('cart'));
    // return redirect()->route('cartweb');


    }
}
