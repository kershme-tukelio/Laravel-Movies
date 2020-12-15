@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h1>{{$movie->title}}</h1>
<p>{{$movie->zaplet}}</p>
@endsection