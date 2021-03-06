<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\requests\StoreUpdatePost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate();
        return view('admin.posts.index',compact('posts'));
    }
    public function create(){
       return view('admin.posts.create');
    }
    public function store(StoreUpdatePost $request){
        $post = Post::create($request->all());
        return redirect()->route('posts.index');
    }
    public function show($id){
        
        if(!$post = Post::find($id)){
            return redirect()->route('posts.index');
        }
    
        return view('admin.posts.show',compact('post'));
    
    } 
    public function destroy($id){
        if(!$post = Post::find($id))
            return redirect()->route('posts.index');
        
            $post->delete();
            return redirect()
            ->route('posts.index')
            ->with('message','Post Deletado com sucesso!');
    }
    public function edit($id)
    {
        if(!$post = Post::find($id)){
            return redirect()->route('posts.index');
        }
    
        return view('admin.posts.edit',compact('post'));
    
    }
    public function update(StoreUpdatePost $request, $id){
        if(!$post = Post::find($id)){
            return redirect()->route('posts.index');
        }
        $post->update($request->all());

        return redirect()
            ->route('posts.index')
            ->with('message',"Post {$post->title} Editado  com sucesso!");
    }
}
