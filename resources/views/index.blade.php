@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<h1>Movies</h1>
    <ul>
        @foreach($movies as $movie)
            <li>
                <h3><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h3>
                <p>{{$movie->zaplet}}</p>
            </li>
        @endforeach
    </ul>
@endsection