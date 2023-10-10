<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Shop;
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


        $floors = new Floor();

        // $floors=Floor::all();
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example image validation
        ]);

        $floors->floor_name = $request->input('name');
        // $floors->email = $request->input('email');

        // Handle image upload if needed
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageName = 'image.' . $request->file('image')->extension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $floors->floor_image = $imageName;
            // $storedPath = $uploadedFile->store('public/photo');
            $floors->save();
        }

        $floors->save();

        return redirect()->route('floor.index')->with('success', 'Floor created successfully');
       

        // return redirect('dashboard/floors.index')->with('success', 'floor added!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Floor $floor)
    {
        $floors = Floor::all();
        $shops = Shop ::all();

        return view ('website.directory', compact('floors' , 'shops'));
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
