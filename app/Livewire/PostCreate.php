<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostCreate extends Component
{
    use WithFileUploads;
    #[Layout('components.author.author-layout')]
    public $title;
    public $content;
    public $image;
    public $category_id;
    
    public function create(){
        $postAttr = $this->validate([
            'title' => ['required'],
            'content' => ['required', 'min:20'], //the function of users,email is to tell that in the users table and specifically the email column. Though we might ignore the email part.
            'image' => ['required', File::types(['jpeg','png','jpg'])],
            'category_id' => ['required']
        ]);
        $logoPath = $this->image->store('postimages'); // the sstorage of the image is configured in the filesystem in .env file and in the filesystem.php in cnfig // the store('logos') will create a folder called logos in the storage>app>public folder
        $postAttr['image'] = $logoPath;
        $postAttr['user_id'] = Auth::user()->id;
      
        Post::create($postAttr);
        
        return redirect('/author/all-post');
    }
    public function render()
    {
        return view('livewire.post-create',['category'=>Category::all()]);
    }
}
