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
        <div class="p-6">
            <p class="text-gray-700 text-base mb-4">
                Caption : {{ $post->caption}}
            </p>
        </div>
    </div>
</div>

@endsection
</x-app-layout>