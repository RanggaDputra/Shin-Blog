@extends('layout.main')
@section('container')
<h1>Category : {{ $category }}</h1>
  @foreach ($posts as $post)
      <article class="m-3">
        
        <h2 >
            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
        
        <p>{{ $post->excerpt }}</p>
      </article>
  @endforeach
@endsection