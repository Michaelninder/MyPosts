<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $input = $request->validate([
            'username' => ['required', 'min:3', 'max:12', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'max:12', 'confirmed'],
        ]);

        $input['role'] = 'user';
        $input['password'] = Hash::make($input['password']);
        $input['uuid'] = Str::uuid(); 

        $user = User::create($input);

        Auth::login($user);

        return view('pages.home', ['success' => 'Registration successful']);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return view('pages.home', ['success' => 'Login successful']);
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
