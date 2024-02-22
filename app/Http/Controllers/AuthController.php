<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('register');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function register()
    {
        // dd(request()->all());

        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully!');
    }

    public function authenticate()
    {
        // dd(request()->all());
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if( auth()->attempt($validated) )
        {
            request()->session()->regenerate();
            return redirect()->route('idea.index')->with('success', 'Logged  in successfully!');
        }

        return redirect()->route('login')->withErrors([
        'email' => 'email not matched!']);
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('idea.index')->with('success', 'logged out successfully!');
    }

}
