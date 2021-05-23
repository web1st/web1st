<?php

namespace App\Http\Controllers;

use App\Post;
use App\Posts;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest()->get();
        return view('posts.index',['post'=>$post]);
    }

    public function show($id)
    {
        $post = Post::find($id);
         
        return view('posts.show',['posts'=>$post]);
    }
  

}
