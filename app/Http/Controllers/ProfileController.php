<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Order;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = auth()->user();
        $orders = $user->orders()->paginate(10);

        // $orders = Order::with('user')->paginate(10); 
        return view('profile.edit', compact('orders' , 'user'));
        // return view('profile.edit', [ 'user' => $request->user(),
        // ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
    
        // Update user attributes
        $user->fill($request->validated());
    
        // You can access the "phone" and "address" fields directly from the request and update them
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
    
        // Check if the email has changed and reset email verification
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
    
        $user->save();
    
        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }
    
    public function show_order(){

        $user = auth()->user();
        $orders = $user->orders()->paginate(10);

        // $orders = Order::with('user')->paginate(10); 
        return view('profile.edit', compact('orders'));
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {

        // dd('destroy');

        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
