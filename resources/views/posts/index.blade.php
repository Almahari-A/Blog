@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <h4>The cool posts in Cool Blog</h4>
        <div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>UserId</th>
                        <th>Image</th>
                        <th>Caption</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->user_id }}</td>
                        <td>
                        <img src="{{asset('storage/'.$post->image)}}"/>
                        <img src="{{asset($post->image)}}"/>
                        </td>
                        <td>{{ $post->caption}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection