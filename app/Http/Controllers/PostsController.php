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
    public function create()
    {
        return view('posts.create');
    }


    public function store()
    {
        $post = new post();
        $post->title=request('title');
        $post->excerpt=request('excerpt');
        $post->body=request('body');

        $post->save();

        return redirect('post');
    }
 
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
 
    public function show($posts)

    {
        $posts = Post::find($posts);
        if ( ! $posts){
            abort(404);
        }

        return view('/posts.show',['posts'=>$posts]);
    }



 
}
 