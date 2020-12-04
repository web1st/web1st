<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Post::get();

        return view('posts.index',['posts'=>$posts]);
       
    }
    public function show($posts)

    {
        $posts = Post::find($posts);
        if ( ! $posts){
            abort(404);
        }

        return view('posts.show',['posts'=>$posts]);
    }




}
 