<a href="{{route('posts.create')}}">Criar novo post</a>
<h1>posts</h1>

@foreach ($posts as $post)
    <p>{{$post->title}}</p>
@endforeach