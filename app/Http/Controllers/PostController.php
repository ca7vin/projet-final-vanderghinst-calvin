<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        if (! Gate::allows('create-post')) {
            abort(403);
        }
        $categories = Categorie::all();
        $tags = Tag::all();
        return view("/back/posts/create", compact("categories","tags"));
    }
    public function store(Request $request)
    {
        $post = new Post;
        $this->authorize('create', Post::class);
        $request->validate([
         'title'=> 'required',
         'text'=> 'required',
         'quote'=> 'required',
        ]); // store_validated_anchor;
        // default image
        if ($request->image === null) {
            $post->image = "newImg.jpg";
        } else {
            $post->image = $request->image->hashName();
            $request->file('image')->storePublicly('images', 'public');
        }
        $post->title = $request->title;
        $post->text = $request->text;
        $post->quote = $request->quote;
        if (Auth::user()->role_id === 3) {
            $post->redacteur_id = Auth::user()->redacteur->id;
        } elseif (Auth::user()->role_id === 1) {
            $post->redacteur_id = null;
        }
        $post->status = false;
        $post->save(); // store_anchor
        $post->categories()->attach($request->categories, [
            'post_id' => $post->id,
        ]);
        $post->tags()->attach($request->tags, [
            'post_id' => $post->id,
        ]);
        return redirect()->route("posts.index")->with('message', "Successful storage !");
    }
    public function show($id)
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
        if (! Gate::allows('update-post', $post)) {
            abort(403);
        }
        $categories = Categorie::all();
        $tags = Tag::all();
        return view("/back/posts/edit",compact("post", "categories", "tags"));
    }
    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $this->authorize('update', $post);
        $request->validate([
         'title'=> 'required',
         'text'=> 'required',
         'quote'=> 'required',
        ]); // update_validated_anchor;
        // default image
        if ($request->image === null) {
            $post->image =  $post->image;
        } else {
            $post->image = $request->image->hashName();
            $request->file('image')->storePublicly('images', 'public');
        }
        $post->title = $request->title;
        $post->text = $request->text;
        $post->quote = $request->quote;
        // post status if admin
        if (Auth::user()->role_id === 2) {
            $post->status = $post->status;
        } else if (Auth::user()->role_id === 1) {
            $post->status = $request->status;
        }
        $post->save(); // update_anchor
        $post->categories()->sync($request->categories, [
            'post_id' => $post->id,
        ]);
        $post->tags()->sync($request->tags, [
            'post_id' => $post->id,
        ]);
        return redirect()->route("posts.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $this->authorize('delete', $post);
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $categories = Categorie::all();
        $tags = Tag::all();
        $news = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('text', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('front/pages/search', compact('news', 'categories', 'tags'));
    }
}
