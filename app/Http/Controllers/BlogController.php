<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class BlogController extends Controller
{
    public function home(){
        Post::all();
        return view('home', [
            'post'=>Post::latest()->simplePaginate(5)
        ]);
    }
    public function show(){
        return view('view');
    }

    public function contact(){
        return view('contact');
    }
    public function sendMessage(){
        return view('thank-you');
    }
    public function about(){
        return view('about');
    }
    public function create(){
        $category = Category::all();
        return view('author.create-post', ['category'=>$category]);
    }

    public function store(){
        // dd(request()->all());
        $postAttr = request()->validate([
            'title' => ['required'],
            'content' => ['required', 'min:100'], //the function of users,email is to tell that in the users table and specifically the email column. Though we might ignore the email part.
            'image' => ['required', File::types(['jpeg','png','jpg'])],
            'category_id' => ['required']
        ]);
        $logoPath = request()->image->store('postimages'); // the sstorage of the image is configured in the filesystem in .env file and in the filesystem.php in cnfig // the store('logos') will create a folder called logos in the storage>app>public folder
        $postAttr['image'] = $logoPath;
        $postAttr['user_id'] = Auth::user()->id;
      
        Post::create($postAttr);
        
        return redirect('/author/all-post');
        
    }
    public function post(Post $post){
        $recent = Post::latest()->limit(5)->get();
        return view('post', ['post' => $post, 'recent' => $recent]);
    }

    public function comment(){
        $commentAttr = request()->validate([
            'comment' => ['required', 'min:1'],
            'post_id' => ['required']
        ]);
        Comment::create($commentAttr);
        
        return redirect($_SERVER['HTTP_REFERER']);

    }
}

