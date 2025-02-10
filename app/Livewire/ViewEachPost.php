<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ViewEachPost extends Component
{
    #[Layout('components.layout')]
    public Post $post;

    public $comment;
    public $post_id;
    public function mount(){
        $this->post_id = $this->post->id;
    }
    public function sendcomment(){
        $commentAttr = $this->validate([
            'comment' => ['required', 'min:1'],
            'post_id' => ['required']
        ]);
        // dd($this->post->comment);
        Comment::create($commentAttr);
        $this->reset('comment');
        // dd("op");
    }
    public function render()
    {
        return view('livewire.view-each-post',['post' => $this->post, 'recent' => Post::latest()->limit(5)->get()]);
    }
}
