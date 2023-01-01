@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <p>The cool users of Cool Blog</p>

    <ul>
        @foreach ($users as $user)
            <li><a href={{ route('users.show', ['id' => $user -> id]) }}">{{ $user->name }}</a></li>
        @endforeach
    </ul>

@endsection