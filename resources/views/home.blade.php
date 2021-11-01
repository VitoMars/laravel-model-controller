@extends('layouts.app')
@section('title', 'Homepage')
    
@section('content')
<section id="home-movies">
    <div class="container">
        <div class="movies">
            @foreach ($movies as $movie)
                <a href="{{route('movie', ['id' => $movie['id']])}}">
                     <h1>{{$movie['title']}}</h1>
                     <h3>Voto: {{$movie['vote']}}</h3>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection