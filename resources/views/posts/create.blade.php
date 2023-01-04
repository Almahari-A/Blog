<x-app-layout>

@section('content')

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Cool Posts') }}
        </h2>
</x-slot>

<div class="flex justify-center">

    <form method="POST" enctype="multipart/form-data" action={{ route('posts.store') }} >
        @csrf 
        <div class="block">

            <input type="file"
            class="block shadow-5xl mb-10 p-2 w-80 
             placeholder-gray-400"
             name="image"
             value="{{ old('image')}}">

            <input type="text" 
            class="block shadow-5xl mb-10 p-2 w-80 
             placeholder-gray-400"
             name="caption"
             placeholder="Caption"
             value="{{ old('caption')}}">

        </div>

        <div>
        <input type="submit" name="Submit">
        </div>
        <div>
        <a href="{{ route('posts.index') }}">Cancel</a>
        </div>

    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
</div>    

@endsection

</x-app-layout>