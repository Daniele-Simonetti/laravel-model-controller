@extends('layouts.base')

@section('content')
<main>
  {{-- @dd($movies); --}}
  @foreach ($movies as $movie)
  <div>
    <h1>Titolo: {{ $movie->title }}</h1>
    <h2>Date: {{ $movie->date }}</h2>
    <h3>Nationality: {{ $movie->nationality }}</h3>
    <h4>Original-title: {{ $movie->original_title }}</h4>
    <span>Vote: {{ $movie->vote }}</span>

  </div>
  @endforeach
</main>
@endsection