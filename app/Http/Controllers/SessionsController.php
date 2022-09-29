<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;


class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye');
    }

    public function create()
    {
        return view('sessions.create');
    }

    /**
     * @throws ValidationException
     */
    public function login()
    {
         $attributes = \request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

         if (auth()->attempt($attributes)) {
             session()->regenerate();
             return redirect('/')->with('success', 'Welcome Back, ' . ucfirst(auth()->user()->name));
         }

//         return back()
//             ->withErrors(['email' => 'Your provided credentials could not be verified'])
//             ->withInput();

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);
    }
}
