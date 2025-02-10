<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditJob extends Component
{
    #[Layout('components.author.author-layout')]
    public Post $post;
    public function render()
    {
        return view('livewire.edit-job',['category'=>Category::all()]);
    }
}
