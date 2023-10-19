<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission; // Import the ContactSubmission model

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Store the form data in the database
        ContactSubmission::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect the user back to the contact form with a success message
        return redirect('/contact-us')->with('success', 'Your message has been submitted successfully!');
    }
}
