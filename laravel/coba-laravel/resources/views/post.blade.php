@extends('layout.main')

@section('container')
    <h3>{{ $post->title }}</h3>
    <p>{!! $post->body !!}</p>
    <a href="/blog">back to blog page</a>
@endsection
