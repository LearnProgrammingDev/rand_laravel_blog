@extends('layouts.main')


@section('container')

  <h1>Halaman About</h1>

  <h2>{{ $name }}</h2>
  <p>email : {{ $email }}</p>
  <p>YT : {{ $yt }}</p>
  <img src="images/{{ $image }}" alt="{{ $name }}" width="300" class="img-thumbnail rounded-circle">

@endsection