<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class About extends Component
{
    #[Layout('components.layout')]
    public function render()
    {
        return view('livewire.about');
    }
}
