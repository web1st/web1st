@extends('layout2')

@section('articles')
<div class="col-4 col-12-medium">
                        
    <!-- Spotlight -->

<section class="box spotlight">

<h2 class="icon fa-file-alt">Spotlight</h2>

@foreach($posts as $post)
<article>
<a href="" class="image featured"><img src="images/pic07.jpg" alt=""></a>
<header>
<h3><a href="/posts/{{ $posts->id}}">
    {{$posts->title}}

</a></h3>
<p>The pros and cons. Mostly cons.</p>
</header>
<p> {{ $posts->excerpt }}</p>
<footer>
<a href="#" class="button alt icon solid fa-file-alt">Continue Reading</a>
</footer>
</article>
@endforeach
</section>

@endsection