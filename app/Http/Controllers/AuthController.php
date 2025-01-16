<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Show the login page
    function index()
    {
        return view('auth.login');  // Make sure this view exists
    }

    // Handle login logic
    function login(Request $request)
    {
        $userDetails = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($userDetails)) {
            $request->session()->regenerate();
            return redirect('/films');
        }
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Handle logout logic
    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function registerForm()
{
    return view('auth.register');
}

public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role_id' => 1, // Default role
    ]);

    Auth::login($user);

    return redirect('/films')->with('success', 'Registration successful!');
}
}
