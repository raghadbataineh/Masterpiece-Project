<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function index()
    {
        // return view ('website.checkout');
    }
  

    public function store(Request $request){

        // dd($request->all());
        
        $request->validate([
            'address' => 'required|string',
            'city' => 'required|string',
        ]);

        
        $address = $request->input('address');
        $city = $request->input('city');

        
        $order = new Order();
 
        $order->user_id = auth()->id(); 
        $order->shop_id = $request->input("shop_id"); 
        $order->quantity = $request->input("quantity"); 
        $order->product_id = $request->input("product_id");

        $order->address = $address;
        $order->city = $city;
        $order->payment_method  = $request->input('paymentmethod');

        if ($request->input('paymentmethod') == 'visa') {
            // Redirect to a specific route for Visa card payments
            return view ('website.aboutus');
        }

        // $order->payment_method = 'Cash on Delivery'; 
        $order->subtotal = $request->input("subtotal");
        $order->delivery = $request->input("delivery");
        $order->total = $request->input("total");
        
        $order->order_status = 'Pending'; 
        $order->save();


        // 5. Redirect the user to a thank you page or order details page
        // return redirect()->route('checkout.show');
        return view ('website.thanks', compact('order'));

        
        //->with('success', 'Order placed successfully!')
    }


    
    
    public function show(Cart $cart){

        return view ('website.thanks');


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

   
    public function destroy($id)
    {
        // $cartItem = Cart::find($id);
        //  dd($id);
        Cart::destroy($id);

        // if ($cartItem) {
        //     $cartItem->delete();
        //     return back()->with('success', 'Product deleted successfully.');
        // } else {
        //     return back()->with('error', 'Product not found or already deleted.');
        // }
        return back()->with('success', 'Product deleted successfully.');
    }

//    

}



