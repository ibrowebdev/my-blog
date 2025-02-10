<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Livewire\Component;

class RegisterUser extends Component
{
    #[Layout('components.layout')]

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public function create(){
        $attr = $this->validate([
            'name'=>['required'],
            'email'=>['required', 'email', 'unique:users,email'],
            'password'=>['required','confirmed', Password::min(6)]
        ]);
        $user = User::create($attr);
        Auth()->login($user);
        $this->dispatch('register', 
        title: "Hello",
        text: "User Registered successfully!",
        icon: "success"
        );
        sleep(4);
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.register-user');
    }
}
