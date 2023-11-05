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
            // Add more validation rules as needed
        ]);

        
        $address = $request->input('address');
        $city = $request->input('city');

        // 3. Calculate the total cost (subtotal, delivery, and total)
        $subtotal = $this->calculateSubtotal(); // You need to implement this method
        $delivery = 10.00; // You can adjust the delivery cost
        $total = $subtotal + $delivery;

        // 4. Save the order information to the database
        $order = new Order();
        $order->user_id = auth()->id(); // Assuming you have user authentication
        $order->shop_id = 1; // You need to specify the shop's ID
        $order->address = $address;
        $order->city = $city;
        $order->payment_method = 'Cash on Delivery'; // You can adjust this
        $order->subtotal = $subtotal;
        $order->delivery = $delivery;
        $order->total = $total;
        $order->order_status = 'Pending'; // You can set the initial status
        $order->save();

        // Optionally, you can associate the order with the items in the cart and clear the cart

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $floor)
    {
        //
    }
}



