<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategorieController extends Controller
{
    //
    public function index()
    {
        $categories = Categorie::all();
        return view("/back/categories/all",compact("categories"));
    }
    public function create()
    {
        if (! Gate::allows('create-categorie')) {
            abort(403);
        }
        return view("/back/categories/create");
    }
    public function store(Request $request)
    {
        $categorie = new Categorie;
        $this->authorize('create', Categorie::class);
        $request->validate([
         'name'=> 'required',
        ]); // store_validated_anchor;
        $categorie->name = $request->name;
        $categorie->save(); // store_anchor
        return redirect()->route("categories.index")->with('message', "Successful storage !");
    }
    public function show($id)
    {
        $categorie = Categorie::find($id);
        return view("/back/categories/read",compact("categorie"));
    }
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        if (! Gate::allows('update-categorie', $categorie)) {
            abort(403);
        }
        return view("/back/categories/edit",compact("categorie"));
    }
    public function update($id, Request $request)
    {
        $categorie = Categorie::find($id);
        $this->authorize('update', $categorie);
        $request->validate([
         'name'=> 'required',
        ]); // update_validated_anchor;
        $categorie->name = $request->name;
        $categorie->save(); // update_anchor
        return redirect()->route("categories.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $this->authorize('delete', $categorie);
        $categorie->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
