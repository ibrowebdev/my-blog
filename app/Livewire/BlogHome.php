<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class BlogHome extends Component
{
    use WithPagination;
    #[Layout('components.layout')]
    #[Rule('required|email')]
    public $email;
    public $search;
    public function updatedSearch(){
        $this->resetPage();
        // dd('pp');
    }

    public function newsletter(){
        $this->validateOnly('email');
        session()->flash('newsletter', 'You have subscribed to our newsletter');
        $this->reset('email');
    }
    public function render()
    {
        return view('livewire.blog-home', [
            'post'=>Post::where('title', 'LIKE', '%'.$this->search.'%')->latest()->simplePaginate(5)
        ]);
    }
}
