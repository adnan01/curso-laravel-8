<a href="{{route('posts.create')}}">Criar novo post</a>
<h1>posts</h1>
@if (session('message'))
    <div>
        {{session('message')}}
    </div>
    
@endif
@foreach ($posts as $post)
    <p>{{$post->title}}
        [<a href="{{route('posts.show',$post->id)}}">Detalhes</a>]
        [<a href="{{route('posts.edit',$post->id)}}">Editar</a>]
    </p>
@endforeach

{{$posts->links()}}