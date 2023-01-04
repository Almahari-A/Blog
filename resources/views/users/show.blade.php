<x-app-layout>
@section('content')
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name }} Details
        </h2>
</x-slot>

    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Email: {{ $user->email}}</li>
    </ul>
@endsection
</x-app-layout>