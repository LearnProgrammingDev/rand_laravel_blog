@extends('layouts.main')

@section('container')

  <article class="mb-5">
    {{-- @dd($single_post) --}}
    <h2>{{ $single_post->judul }}</h2>
    <h6>By: Randi Mulyana <a href="/categories/{{ $single_post->category->slug }}">{{ $single_post->category->name }}</a></h6>
    
    {!! $single_post->isi !!}
  </article>
  
  <a href="/blog">Kembali Ke Posts</a>
  
 @endsection