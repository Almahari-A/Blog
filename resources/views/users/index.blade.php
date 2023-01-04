<x-app-layout>

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('The Cool Users of CoolBlog') }}
        </h2>
    </x-slot>

    
    <div>
        <ul>
            @foreach ($users as $user)
                <li><a href={{ route('users.show', ['id' => $user -> id]) }}">{{ $user->name }}</a></li>
            @endforeach
        </ul>
    </div>
    

    <div class="row d-flex justify-content-center">
        <div class="col-auto space-x-2">{!! $users->links() !!}</div>
    </div>

@endsection
</x-app-layout>