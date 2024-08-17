<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view("auth.login");
    }
    public function store(){
        $validated = request()->validate([
            "name"=> ['required'],
            "password"=> ["required"],
            ]);

        if(!Auth::attempt($validated)){
            dd(request()->all());
            throw ValidationException::withMessages([
                "name"=> "Failure to comply",
            ]);
        }
        request()->session()->regenerate();
        return redirect("/");
    }

    public function destroy(){
        Auth::logout();
        return redirect("/");
    }

}
