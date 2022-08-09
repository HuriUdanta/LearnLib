@extends('layout.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $nama }} </h3>
    <p>{{ $email }} </p>
    <img src="img/{{ $image }}  " width="200" alt="">
    <a href="/posts">back to blog</a>
@endsection
