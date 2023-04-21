<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You have been logged out');
    }
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        //validate the requests
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // authenticate and log in
        if (auth()->attempt($attributes)) {
            //session fixation
            session()->regenerate();
            // redirect with feedback
            return redirect('/')->with('success', 'You are logged in');
        }
        //auth failed
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);
    }
}
