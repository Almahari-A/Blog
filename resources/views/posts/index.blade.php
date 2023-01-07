<x-app-layout>
@section('content')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('The Cool Posts of CoolBlog') }}
        </h2>
    </x-slot>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-50">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                User Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Image
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Caption
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Edit
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
          @foreach ($posts as $post)
            <tr class="bg-white border-b">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $post->user->name }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <a href="{{ route('posts.show', ['id' => $post -> id]) }}">
                    <img src="{{asset('storage/'.$post->image)}}" width="300"/>
                </a>
                <a href="{{ route('posts.show', ['id' => $post -> id]) }}" width="300">
                    <img src="{{asset($post->image)}}"/>
                </a>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $post->caption}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                @if (isset(Auth::user()->id) && 
                Auth::user()->id == $post->user_id)
                  <a href="{{ route('posts.edit',['id' => $post->id] )}}">Edit</a>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-auto space-x-2">{!! $posts->links() !!}</div>
</div>

@endsection
</x-app-layout>