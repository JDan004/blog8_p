<x-app-layout>

    <ul>

        <h1>Listado de Posts:</h1>

        <a href="{{ route('posts.create') }}">Crear post</a>
        
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }};

</x-app-layout>
