<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Admin;
use App\Models\Shop;


class dashhome extends Controller
{
    public function index()
    {
        $shopCount = Shop::count();
        $userCount = User::count();
        $adminCount = Admin::count();
        $categoryCount = Category::count();

        return view('dashboard.welcome-dashboard', compact('shopCount', 'userCount', 'adminCount', 'categoryCount'));
    }

    public function create()
    {
        // Your logic to show the creation form
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Your logic to store the new resource
    }

    // Display a specific resource
    public function show($id)
    {
        // Your logic to retrieve and display a specific resource
    }

    // Show the form for editing a specific resource
    public function edit($id)
    {
        // Your logic to show the edit form
    }

    public function update(Request $request, $id)
    {
        // Your logic to update the resource
    }

    public function destroy($id)
    {
        // Your logic to delete the resource
    }

}


