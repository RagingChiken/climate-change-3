<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi data formulir
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        
        \Mail::to('admin@climatechange.org')->send(new \App\Mail\ContactMessage($validated));

        
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
    
}
