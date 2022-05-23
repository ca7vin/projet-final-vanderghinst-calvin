<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view("/back/posts/all",compact("posts"));
    }
    public function create()
    {
        return view("/back/posts/create");
    }
    public function store(Request $request)
    {
        $post = new Post;
        $request->validate([
         'title'=> 'required',
         'text'=> 'required',
         'quote'=> 'required',
        ]); // store_validated_anchor;
        $post->title = $request->title;
        $post->text = $request->text;
        $post->quote = $request->quote;
        if (Auth::user()->role_id === 3) {
            $post->redacteur_id = Auth::user()->redacteur->id;
        } elseif (Auth::user()->role_id === 1) {
            $post->redacteur_id = null;
        }
        $post->save(); // store_anchor
        return redirect()->route("post.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $post = Post::find($id);
        return view("/back/posts/read",compact("post"));
    }
    public function onepage($id)
    {
        $post = Post::find($id);
        return view("/front/pages/single-post", compact("post"));
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view("/back/posts/edit",compact("post"));
    }
    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $request->validate([
         'title'=> 'required',
         'text'=> 'required',
         'quote'=> 'required',
        ]); // update_validated_anchor;
        $post->title = $request->title;
        $post->text = $request->text;
        $post->quote = $request->quote;
        $post->save(); // update_anchor
        return redirect()->route("post.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
