<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AllPosts extends Component
{
    #[Layout('components.author.author-layout')]
    public function delete(Post $post){
        if($post->user->is(Auth::user())){
            $post->delete();
            // $this->dispatch('delete');
            // sleep(4);
        }
        // elseif(empty($post)){
        //     $this->dispatch('not-delete', 
        //     title: "Hello",
        //     text: "Unable to delete post!",
        //     icon: "warning"
        //     );
        // }
        else{
            $this->dispatch('not-delete', 
            title: "Hello",
            text: "Unable to delete post!",
            icon: "warning"
            );
            // sleep(4);
        }
        // dd($post);
    }
    public function render()
    {
        return view('livewire.all-posts',['user'=>Auth::user()]);
    }
}
