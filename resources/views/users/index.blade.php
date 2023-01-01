@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <p>The cool users of Cool Blog</p>
    
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

@endsection