@extends('layout2')

@section('content')


<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">
                
                             <!-- Article list -->
 <section class="box article-list">
  <h2 class="icon fa-file-alt">Recent Posts</h2>
                        
  <!-- Excerpt -->
      <article class="box excerpt">
          <a href="#" class="image left"><img src="/images/pic04.jpg" alt="" /></a>
          <div>
              <header>
       <!-- Excerpt -->
        @foreach ($post as $post)
    
        <p>{{$post->created_at}}</p>
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        
        <p>{{$post->excerpt}}</p>
        <br>
        <br>
      
        @endforeach
              </header>
                        
          </div>
      </article>
                        
                        
</section>
 </div>
            </div>
        </div>
    </div>
</div>
              
   
@endsection