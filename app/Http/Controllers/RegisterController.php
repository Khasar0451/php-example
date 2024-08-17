<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function create(){
        return view("auth.register");
    }
    public function store(){
        $validated = request()->validate([
            "name"=> ['required', Rule::unique('users')],
            'email'=> ['required', Rule::unique('users')],
            'password'=> ['required', Password::min(3)->letters(), 'confirmed'],
            ]);

        $user = User::create($validated);
        Auth::login($user);
        return redirect('/');
    }

}
