<x-app-layout>
@section('content')
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Post Details
        </h2>
</x-slot>

<div class="flex justify-center">
    <div class="rounded-lg shadow-lg bg-white max-w-sm">
        <a href="#!">
            <img class="rounded-t-lg" src="{{asset($post->image)}}" width="500px" />
        </a>
        <a href="#!">
        <img src="{{asset('storage/'.$post->image)}} " width="500px" />
        </a>
        <div class="p-6">
            <p class="text-gray-700 text-base mb-4">
                Caption : {{ $post->caption}}
            </p>
        </div>
    </div>
</div>
<div>
    @if (isset(Auth::user()->id) && 
    Auth::user()->id == $post->user_id)
    <form method="POST" 
        action="{{ route('posts.destroy',['id' => $post->id] )}}">
        @csrf 
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endif
</div>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:comments :model="$post" />
                </div>
            </div>
        </div>
    </div>

@endsection
</x-app-layout>