<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthorController extends Controller
{
    public function dashboard(){
       $user = Auth::user();
        return view('author.dashboard', ['user'=>$user]);
}
public function posts(){
    $user = Auth::user();
    return view('author.all-post', ['user'=>$user]);
}

public function delete(Post $post){
    $post->delete();

    return redirect('/author/all-post');
}

public function edit(Post $post){
    $category = Category::all();
    return view('author.edit-post', ['category'=>$category, 'post'=>$post]);
}
public function update(Post $post){
    $postAttr = request()->validate([
        'title' => ['required'],
        'content' => ['required', 'min:100'], //the function of users,email is to tell that in the users table and specifically the email column. Though we might ignore the email part.
        'category_id' => ['required']
    ]);
    $post->update($postAttr);
    return redirect('/author/all-post');

}
}
