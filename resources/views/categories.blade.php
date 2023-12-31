@extends('layout.main')
@section('container')
    <h1>Categories</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2 >
                    <a class="text-decoration-none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h2>
            </li>
        </ul>
    @endforeach
@endsection
