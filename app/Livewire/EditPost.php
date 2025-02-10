<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Validation\Rules\File;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    use WithFileUploads;
    #[Layout('components.author.author-layout')]
    public Post $post;

    public $title;
    public $content;
    public $image;
    public $category_id;
    public function mount(){
        $this->title = $this->post->title;
        $this->content = $this->post->content;
        // $this->category = $this->post->category;
        $this->title = $this->post->title;
    }
    public function update(){
        if (isset($this->image)) {
            # code...
            $postAttr = $this->validate([
            'title' => ['required'],
            'content' => ['required', 'min:100'], //the function of users,email is to tell that in the users table and specifically the email column. Though we might ignore the email part.
            'category_id' => ['required'],
            'image' => ['required', File::types(['jpeg','png','jpg'])],
            ]);
            $logoPath = $this->image->store('postimages'); // the sstorage of the image is configured in the filesystem in .env file and in the filesystem.php in cnfig // the store('logos') will create a folder called logos in the storage>app>public folder
            $postAttr['image'] = $logoPath;
            $this->post->update($postAttr);
            // return redirect('/author/all-post');
            $this->dispatch('updated', 
            title: "Hello",
            text: "Post Updated Successfully",
            icon: "success"
    );
            // session()->flash('updated', 'Post updated!');
        }else{
            $postAttr = $this->validate([
                'title' => ['required'],
                'content' => ['required', 'min:100'], //the function of users,email is to tell that in the users table and specifically the email column. Though we might ignore the email part.
                'category_id' => ['required'],
                // 'image' => ['required', File::types(['jpeg','png','jpg'])],
            ]);
            $this->post->update($postAttr);
            // return redirect('/author/all-post');
            $this->dispatch('updated', 
            title: "Hello",
            text: "Post Updated Successfully",
            icon: "success"
    );
            // session()->flash('updated', 'Post updated!');
        }
        
        // return redirect('/author/all-post');
    }
    public function render()
    {
        return view('livewire.edit-post',['category'=>Category::all()]);
    }
}
