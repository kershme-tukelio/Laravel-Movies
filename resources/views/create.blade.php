@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<form method="POST" action="/movies">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
        @include('partials.error-message', ['field' => 'title'])
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre">
        @include('partials.error-message', ['field' => 'genre'])
    </div>
    <div class="mb-3">
        <label for="director" class="form-label">Director</label>
        <input type="text" class="form-control @error('director') is-invalid @enderror" id="director" name="director">
        @include('partials.error-message', ['field' => 'director'])
    </div>
    <div class="mb-3">
        <label for="release_year" class="form-label">Release year</label>
        <input type="text" class="form-control @error('release_year') is-invalid @enderror" id="release_year" name="release_year">
        @include('partials.error-message', ['field' => 'release_year'])
    </div>
    <div class="mb-3">
        <label for="zaplet" class="form-label">Zaplet: </label>
        <textarea class="form-control @error('zaplet') is-invalid @enderror" id="zaplet" name="zaplet"></textarea>
        @include('partials.error-message', ['field' => 'zaplet'])
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection