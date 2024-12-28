@extends('layouts.main')

@section('container')

<h1 class="mb-5">My Posts</h1>

  @foreach ($artikel as $post)
  {{-- @dd($post) --}}
  <article class="mb-5">
    <h2>
      <a href="/posts/{{ $post->slug }}">{{ $post->judul }}</a>
    </h2>
    <h5>By: {{ $post->author }}</h5>
    <p>{{ $post->ringkasan }}</p>
  </article>
  @endforeach
  
 @endsection