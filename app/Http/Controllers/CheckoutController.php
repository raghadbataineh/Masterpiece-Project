<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        // return view ('website.checkout');
    }

    public function store(Request $request){
        

        
       
        // return view ('website.popupCheckout');
        // return back()->with ('message', successfully)

    
    }
    public function show(Cart $cart){

    }


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
    public function destroy(Cart $floor)
    {
        //
    }
}



