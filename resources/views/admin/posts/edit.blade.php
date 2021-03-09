<h1>Editar Post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach   
    </ul>
@endif
<form action="{{route('posts.update',$post->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" id="title" value="{{$post->title}}"><br>
    <textarea type="text" name="content" id="content" cols="30" rows="4">{{$post->content}}</textarea><br>
    <button type="submit">Editar</button>


</form>