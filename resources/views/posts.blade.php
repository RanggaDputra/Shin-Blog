@extends('layout.main')
@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p >by: <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
        {!! $post->body !!}

        <a href="/post"> back to post</a>
    </article>
@endsection