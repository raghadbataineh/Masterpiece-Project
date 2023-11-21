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
        
        $request->validate([
            'address' => 'required|string',
            'city' => 'required|string',
        ]);

        
        $address = $request->input('address');
        $city = $request->input('city');

        $subtotal = $this->calculateSubtotal(); // You need to implement this method
        $delivery = 10.00; // You can adjust the delivery cost
        $total = $subtotal + $delivery;

        $order = new Order();

        $order->user_id = auth()->id(); 
        $order->shop_id = $request->input("shop_id"); 
        $order->product_id = $request->input("product_id"); 
        $order->address = $address;
        $order->city = $city;
        $order->payment_method  = $request->input('paymentmethod');

        // $order->payment_method = 'Cash on Delivery'; 
        $order->subtotal = $subtotal;
        $order->delivery = $delivery;
        $order->total = $total;
        $order->order_status = 'Pending'; 
        $order->save();


        // 5. Redirect the user to a thank you page or order details page
        return redirect()->route('thankyou')->with('success', 'Order placed successfully!');
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

   
    public function destroy( $id)
    {
        $cartItem = Cart::find($id);

        if ($cartItem) {
            $cartItem->delete();
            return back()->with('success', 'Product deleted successfully.');
        } else {
            return back()->with('error', 'Product not found or already deleted.');
        }
    }

//    

}



