<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cool Blog HomePage') }}
        </h2>
    </x-slot>

    @section('content')
    {{ __("You're logged in!") }}
    @endsection

</x-app-layout>
