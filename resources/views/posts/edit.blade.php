<x-app-layout>

@section('content')

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Cool Posts') }}
        </h2>
</x-slot>


<div class="flex justify-center">

    <form method="POST" enctype="multipart/form-data" action="{{ route('posts.update',['id' => $post->id]) }}">
    @csrf 
    @method('PUT')
    <div class="block">
        <div class="mb-3 xl:w-96">
            <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700">
                Edit Caption 
            </label>
            <textarea
                class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                "
                name="caption"
                id="exampleFormControlTextarea1"
                rows="3"
                placeholder="{{ $post->caption }}"
                value="{{ $post->caption }}"
                ></textarea>
        </div>
    </div>


        <div>
        <input type="submit" name="Update">
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