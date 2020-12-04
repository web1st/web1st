use Illuminate\Foundation\Inspiring;
$quote = inspiring::quote();
@extends('layout')

@section('content')
<header id="header">
    <a href="\offer"><h1>Web1st</h1></a>
    <p>{{\Illuminate\Foundation\Inspiring::quote()}}</p>
    <nav>
        <ul>
            <li><a href="\service" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
    </nav>
</header>

@endsection