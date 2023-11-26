<?php

namespace App\Http\Controllers;

use App\Models\Joinus;
use Illuminate\Http\Request;

class JoinusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.joinus');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $request->validate([
            'shop_name' => 'required|string',
            'shop_phone' => ['required', 'numeric', 'regex:/(079|077|078)\d{7}/'],
            'shop_description' => 'required',
            'owner_name' => 'required|string',
            'owner_phone' =>  ['required', 'numeric', 'regex:/(079|077|078)\d{7}/'],
            'owner_email' => 'required|email',
            'product_description' => 'required|string',
            'product_categories' => 'required|string',
        ], 
        [ 'shop_phone.regex' => 'The phone number must start with 079, 077, or 078 followed by 7 digits.', 
        'owner_phone.regex' => 'The phone number must start with 079, 077, or 078 followed by 7 digits.']
    );

$joinus = new Joinus();

$joinus->shop_name = $request->input('shop_name');
$joinus->shop_phone = $request->input('shop_phone');
$joinus->shop_description = $request->input('shop_description');
$joinus->owner_name = $request->input('owner_name');
$joinus->owner_phone = $request->input('owner_phone');
$joinus->owner_email = $request->input('owner_email');
$joinus->product_description = $request->input('product_description');
$joinus->product_categories = $request->input('product_categories');


$joinus->save();

        // return view('website.joinus');
        return redirect()->back();
        
    }
    /**
     * Display the specified resource.
     */
    public function show(Joinus $joinus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Joinus $joinus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Joinus $joinus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Joinus $joinus)
    {
        //
    }
}
