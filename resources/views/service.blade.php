
@extends('layout')

@section('content')
<div>
<h1>My service</h1>

<p>{{ $post ?? 'nothing here'}}</p>
</div>
@endsection