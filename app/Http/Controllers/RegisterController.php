<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create() :string
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required','min:5'],
            'username' => ['required', 'min:3', 'unique:users,username'],
            'email' => ['required','email', 'unique:users,email'],
            'password' => ['required','min:7'],
        ]);

//        $attributes['password'] = bcrypt($attributes['password']);
//        facade/hash::check(password, hashedVersion)

        $user = User::factory()->create($attributes);

        Auth::login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }
}
