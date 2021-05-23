@extends('layout2')

@section('content')

<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">
                             <!-- Article list -->
                        
  <!-- Excerpt -->
                <form method="POST" action="/posts/{{ $post->id}}">
                    @csrf
                    @method('PUT')

                    <label>Update Title</label>
                        <input
                        type="text"
                        class="border border-secondary form-control"
                        name="title"
                        id="title"
                        placeholder="Title of your post"
                        value="{{ $post->title}}">
                    <label>Update Excerpt</label>
                        <input
                        type="text"
                        class="border border-secondary form-control"
                        name="excerpt"
                        id="excerpt" 
                        placeholder="Excerpt of your post"
                        value="{{ $post->excerpt }}">    
                    <label for="exampleFormControlTextarea1" class="form-label">Update Body</label>
                        <textarea class="border border-secondary form-control" name="body" id="body" rows="3">{{ $post->body }}</textarea>
                        <br>
                        <button class="button alt icon solid fa-arrow-circle-right" type="submit">Submit</button>
                </form>
                   
             </div>
            </div>
        </div>
    </div>
</div>
@endsection


