<x-app-layout>
@section('content')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('The Cool Posts of CoolBlog') }}
        </h2>
    </x-slot>
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

        <div class="row d-flex justify-content-center">
            <div class="col-auto space-x-2">{!! $posts->links() !!}</div>
        </div>

@endsection
</x-app-layout>