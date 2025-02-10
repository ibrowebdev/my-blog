<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

class LoginUser extends Component
{
    #[Layout('components.layout')]
    public $email;
    public $password;
    
        public function create(){
        // dd("p");
        $attributes = $this->validate([
            'email' => ['required', 'email'], 
            'password' => ['required']
        ]);

        if(!Auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=>"Sorry, those credentials does  not match"
            ]);
        }
        session()->regenerate();
        $this->dispatch('login', 
        title: "Hello",
        text: "Logged in successfully!",
        icon: "success"
        );
        // dd('lk');
        sleep(3);
        return redirect('/author/dashboard');
    }
    public function logout(){
        // dd("pol");
        Auth::logout();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.login-user');
    }
}
