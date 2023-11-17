@extends('layout.main')
@section('container')
<h1>{{ $title }}</h1>

@if ($posts->count())

<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">
      <a class="text-decoration-none"href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
      
    </h5>
    <p ><small>

      by: <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a  class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }} 
    </small>
    </p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a class="text-decoration-none btn btn-primary"href="/posts/{{ $posts[0]->slug }}">Read More..</a>
  </div>
</div>
    
@else
<p class="text-center fs-4">Not Post Found</p>
@endif



  @foreach ($posts as $post)
      <article class="m-3">
        
        <h2 >
            {{ $post->title }}
            </h2>
            <p >by: <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a  class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
        
        <p>{{ $post->excerpt }}</p>
        <a class="text-decoration-none"href="/posts/{{ $post->slug }}">Read More..</a>
      </article>
  @endforeach
@endsection