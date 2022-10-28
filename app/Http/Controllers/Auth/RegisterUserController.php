<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
           'name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'email', 'string', 'max:255', 'unique:users'],
           'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

//        Auth::login($user);

        return to_route('login')->with('status', 'Account created!');
    }
}
