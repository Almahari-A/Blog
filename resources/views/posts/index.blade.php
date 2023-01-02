@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <p>The cool posts in Cool Blog</p>

    <ul>
        @foreach ($posts as $post)
            <img src=" {{ $post->image }} "></img>
        @endforeach
    </ul>

@endsection