@extends('layout.main')

@section('container')
    <h3>
        <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
    </h3>
    <h5>by.{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
    <a href="/blog">back to blog page</a>
@endsection
