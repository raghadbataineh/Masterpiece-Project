<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view ('dashboard/categories/index', compact('categories'));
    }
    public function home()
    {
        $categories=Category::all();
        return view ('website/home', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        

        $categories = new Category();

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif |max:2048',
            'description' => 'required',
           
        ]);

        $categories->name = $request->input('name');
        $categories->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $categories->image = $imageName;
            // $storedPath = $uploadedFile->store('public/photo');
            $categories->save();

        }

        // $categories->save();

        return redirect()->route('category.index')->with('success', 'category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categories ,$id)
    {
        // $categories = Category::find($id);

        // if (!$categories) {
        //     abort(404);
        // }

        // return view('website.categories', compact('categories'));
        $category = Category::find($id);

        // Check if the category was found
        if (!$category) {
            // Handle the case where the category does not exist (e.g., return a 404 error)
            abort(404);
        }
    
        // Load the shops associated with this category
        $shops = $category->shops;
    
        // Load the category details view and pass the category and shops data to it
        return view('website.categories', compact('category', 'shops'));
        
    }

   
    public function edit($id)
    {
        $categories = Category::findOrFail($id);

        return view('dashboard.categories.edit', compact('categories'));
    }

    
    public function update(Request $request, Category $categories , $id)
    {
       
        $categories = Category::findOrFail($id);

        $categories->name = $request->input('name');
        $categories->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $categories->image = $imageName;
            $categories->save();

        }

        $categories->save();

        return redirect()->route('category.index')->with('success', 'category updated successfully');
    }

    public function destroy($id)
    {

        Category::destroy($id);
    return back()->with('success', 'Category deleted successfully.');
    }
}
