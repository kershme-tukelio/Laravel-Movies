@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <h1>{{$movie->title}}</h1>
    <h6>Genre: {{$movie->genre}}</h6>
    <h6>Director: {{$movie->director}}</h6>
    <h6>Release Year: {{$movie->release_year}}</h6>
    <p>Zaplet: {{$movie->zaplet}}</p>
@endsection