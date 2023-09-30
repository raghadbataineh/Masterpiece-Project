<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $floors=Floor::all();
        $floors = Floor::all();

        return view ('dashboard/floors.index', compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.floors.create');

    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {
        $request->validate([
            'shop_id' => 'required|exists:services,id',
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example image validation
        ]);

        // Handle image upload if needed
        if ($request->hasFile('image')) {
            $imageName = 'image.' . $request->file('image')->extension();
            $imagePath = $request->file('image')->storeAs('public/assets/img', $imageName);
        }

        // ServicePrice::create([
        //     'service_id' => $request->input('service_id'),
        //     'type' => $request->input('type'),
        //     'price' => $request->input('price'),
        //     'image' => $imagePath ?? null, // Store the image path if uploaded, otherwise null
        // ]);

        return redirect('dashboard/floors.index')->with('success', 'floor added!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Floor $floor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Floor $floor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Floor $floor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Floor $floor)
    {
        //
    }
}
