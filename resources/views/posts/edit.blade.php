<x-app-layout>

    <h1>Crear Post</h1>

    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </div>
    @endif

    <form action="{{route('posts.update', $post)}}" method="POST">

        @csrf
        @method('PUT')


        <label for="">
            Título:
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>

        <br>
        <br>

        <label for="">
            Categoría:
            <input type="text" name="category" value="{{old('category', $post->category)}}">
        </label>

        <br>
        <br>

        <label for="">
            Slug:
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>

        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content">{{old('content', $post->content)}}</textarea>
        </label>

        <br>
        <br>

        <button type="submit">Editar post</button>


    </form>

</x-app-layout>