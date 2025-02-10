<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function create(){
        // dd(request());
        $attr = request()->validate([
            'name'=>['required'],
            'email'=>['required', 'email', 'unique:users,email'],
            'password'=>['required','confirmed', Password::min(6)]
        ]);
        $user = User::create($attr);
        Auth()->login($user);

        return redirect('/');
    }
}
