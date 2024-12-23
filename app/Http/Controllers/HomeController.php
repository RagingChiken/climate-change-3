<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function solution()
    {
        return view('solution');
    }

    public function donate()
    {
        return view('donate');
    }

    public function processDonation(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);
        return redirect()->back()->with('success', 'Thank you for your donation!');
    }


    public function forum()
    {
        return view('forum');
    }

    
}

