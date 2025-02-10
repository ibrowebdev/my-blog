<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Contact extends Component
{
    #[Layout('components.layout')]
    #[Rule('required|min:2')]
    public $name;
    #[Rule('required|email')]
    public $email;
    #[Rule('required|min:10')]
    public $message;
    public function sendMessage(){
        $this->validate();
        // dd("po");
        $this->dispatch('message', 
        title: "Hello",
        text: "Your Message Has Been Received!",
        icon: "success"
);
        session()->flash('contact-message','Your message has been received !!!');
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
