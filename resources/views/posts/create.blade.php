@extends('layout2')

@section('content')

<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">
                             <!-- Article list -->
                        
  <!-- Excerpt -->
                <form class="form" method="POST" action="/posts">
                    @csrf
                    <!--@method('PUT')-->
                    <label>Title</label>
                        <input
                        type="text"
                        class="border border-secondary form-control"
                        name="title"
                        id="title"
                        placeholder="Title of your post"
                        required>    
                        @if ($errors->has('title'))
                        <p class="invalid"> {{ $errors -> first('title') }} </p>
                        @endif

                    <label>Excerpt</label>
                        <input 
                        type="text" 
                        class="border border-secondary form-control" 
                        name="excerpt" 
                        id="excerpt" 
                        placeholder="Excerpt of your post"
                        required>    
                    <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                        <textarea 
                        class="border border-secondary form-control"
                        name="body" 
                        id="bdy" 
                        rows="3"
                        required></textarea>
                        <br>
                        <button class="button alt icon solid fa-arrow-circle-right" type="submit">Submit</button>
                </form>
                   
             </div>
            </div>
        </div>
    </div>
</div>
              
   @endsection


