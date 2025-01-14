<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthloginController extends Controller
{
    public function view()
    {
        return view('log');
    }
    public function login(Request $request){
     // Validate the login credentials
     $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to log the user in
    if (Auth::attempt($request->only('email', 'password'))) {
        // Authentication passed, redirect to intended or default route
        return redirect()->intended('/investigations');
    }

    // Authentication failed, redirect back with error
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

// Handle logout
public function logout()
{
    Auth::logout();
    return redirect('/login'); // Redirect to login page
}
}
