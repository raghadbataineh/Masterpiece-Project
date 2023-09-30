<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view ('dashboard/users/index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);

        $users = new User();

        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->address = $request->input('address');
        $users->email = $request->input('email');
        $users->password = Hash::make ($request->input('password'));

       

        $users->save();

        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('dashboard.users.edit', compact('users'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user , $id)
    {
        $users = User::findOrFail($id);

        $users->name = $request->input('title');
        $users->phone = $request->input('description');
        $users->email = $request->input('type');

       


        $users->save();

        return redirect()->route('user.index')->with('success', 'user updated successfully');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success', 'User deleted successfully.');
    }
}






