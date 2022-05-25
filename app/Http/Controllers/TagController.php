<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function index()
    {
        $tags = Tag::all();
        return view("/back/tags/all",compact("tags"));
    }
    public function create()
    {
        return view("/back/tags/create");
    }
    public function store(Request $request)
    {
        $tag = new Tag;
        $request->validate([
         'name'=> 'required',
        ]); // store_validated_anchor;
        $tag->name = $request->name;
        $tag->save(); // store_anchor
        return redirect()->route("tag.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $tag = Tag::find($id);
        return view("/back/tags/read",compact("tag"));
    }
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view("/back/tags/edit",compact("tag"));
    }
    public function update($id, Request $request)
    {
        $tag = Tag::find($id);
        $request->validate([
         'name'=> 'required',
        ]); // update_validated_anchor;
        $tag->name = $request->name;
        $tag->save(); // update_anchor
        return redirect()->route("tag.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
