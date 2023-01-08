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

    @if($posts->count() > 0)
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
    @else
        <p>User has no posts</p>
    @endif

@endsection
</x-app-layout>