<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login'); // Return the login view
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('success', 'Login successful!');
        }

        return redirect()->route('login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function registration()
    {
        return view('auth.registration'); // Return the registration view
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user); // Automatically log in the user after registration

        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}