@extends('layout2')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
@endsection


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
                    <label>Title</label>
                        <input
                        type="text"
                        class="border border-secondary form-control"
                        name="title"
                        id="title"
                        placeholder="Title of your post"
                        value="{{ $post->title}}">
                    <label>Excerpt</label>
                        <input type="text" class="border border-secondary form-control" name="excerpt" id="excerpt" placeholder="Excerpt of your post">    
                    <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                        <textarea class="border border-secondary form-control" name="body" id="bdy" rows="3"></textarea>
                        <br>
                        <button class="button alt icon solid fa-arrow-circle-right" type="submit">Submit</button>
                </form>
                   
             </div>
            </div>
        </div>
    </div>
</div>
@endsection


