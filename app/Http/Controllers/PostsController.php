<?php

namespace App\Http\Controllers;
use App\Post;
use DB;
use App\Service;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(Post $post)
    {
       // $posts = Post::get();

        return view('/posts.index',['posts'=>$post]);
       
    }
    public function show(Post $post)

    {
        
    //   $posts = Post::findOrFail($id);
    // if ( ! $posts){
      // abort(404);
       //  }
         return view('/posts.show',['posts'=>$post]);
     }

    public function create()
    {
        
        return view('/posts.create');
    }


    public function store()
    {
        request()->validate([

            'title' => ['required'],
           'excerpt' => ['required'],
            'body' => ['required']
        ]);

        $post = new post();
        $post->title=request('title');
        $post->excerpt=request('excerpt');
        $post->body=request('body');

        $post->save();

        

        return redirect('/post');
    }
 
    public function edit(Post $post)
    {
      // $post = Post::findOrFail($id);
        return view('/posts.edit', compact('post'));
    }
 
  

    public function update(Post $post)
    {
        request()->validate([

            'title' => ['required'],
           'excerpt' => ['required'],
            'body' => ['required']
        ]);

      
       $post->title=request('title');
       $post->excerpt=request('excerpt');
       $post->body=request('body');

       $post->save();

        return redirect('/post/');
       
    }

    public function destroy()
    {

    }

 
}
 