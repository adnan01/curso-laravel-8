<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" id="title"><br>
    <textarea type="text" name="content" id="content" cols="30" rows="4"></textarea><br>
    <button type="submit">Enviar</button>


</form>