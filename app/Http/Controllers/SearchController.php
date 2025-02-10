<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){  // the function of invoke here is used when we dont intend to have more than 1 method so we will just call the controller without specifying the method to call
        // dd("ddddd");
        $post = Post::with(['user', 'category'])
                ->where('title', 'LIKE', '%'.request('post').'%')
                // ->orWhere('category', 'LIKE', '%' . request('post') . '%')
                ->get(); //the function of with() is to eagerload and do all the query at once
        // dd($post);
        return view('search', ['posts'=> $post]);
    }
}
