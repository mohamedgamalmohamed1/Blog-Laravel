<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials cold not be validate'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back');

        // return back()
        //     ->withInput()
        //     ->withErrors(['email' => 'Your provided credentials cold not be validate']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye');
    }
}