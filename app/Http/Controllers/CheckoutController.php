<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // return view ('website.checkout');
    }

    public function store(Request $request){
        
        return view ('website.checkout');
    
    }
}



