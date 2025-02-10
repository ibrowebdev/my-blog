<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function create(Request $request){
        $attributes = $request->validate([
            'email' => ['required', 'email'], 
            'password' => ['required']
        ]);

        if(!Auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=>"Sorry, those credentials does  not match"
            ]);
        }
        $request->session()->regenerate();

        return redirect('/author/dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
