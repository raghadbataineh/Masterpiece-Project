<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted; // Replace with the appropriate mail class

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('website.contactus');
    }

    public function create()
    {
        // Show the contact form
    }

    public function store(Request $request)
    {
        // Validate and process the form data
        $contacts = new Contact();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
           
        ]);


        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->message = $request->input('message');

        
        $contacts->save();


        return redirect()->route('contact.index')->with('success', 'Your message has been sent successfully!');
    }

    public function show($id)
    {
        // Show a specific contact message
    }

    public function edit($id)
    {
        // Edit a specific contact message
    }

    public function update(Request $request, $id)
    {
        // Update a specific contact message
    }

    public function destroy($id)
    {
        // Delete a specific contact message
    }
}
