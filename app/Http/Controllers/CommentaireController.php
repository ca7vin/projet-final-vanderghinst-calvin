<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CommentaireController extends Controller
{
    //
    public function index()
    {
        $commentaires = Commentaire::all();
        return view("/back/commentaires/all",compact("commentaires"));
    }
    public function create()
    {
        if (! Gate::allows('create-commentaire')) {
            abort(403);
        }
        return view("/back/commentaires/create");
    }
    public function store(Request $request)
    {
        $commentaire = new Commentaire;
        $this->authorize('create', Commentaire::class);
        $request->validate([
        //  'user_id'=> 'required',
         'content'=> 'required',
         'post_id'=> 'required',
        ]); // store_validated_anchor;
        $commentaire->user_id = Auth::user()->id;
        $commentaire->content = $request->content;
        $commentaire->post_id = $request->post_id;
        $commentaire->save(); // store_anchor
        return redirect()->back();
    }
    public function show($id)
    {
        $commentaire = Commentaire::find($id);
        return view("/back/commentaires/read",compact("commentaire"));
    }
    public function edit($id)
    {
        $commentaire = Commentaire::find($id);
        if (! Gate::allows('update-commentaire', $commentaire)) {
            abort(403);
        }
        return view("/back/commentaires/edit",compact("commentaire"));
    }
    public function update($id, Request $request)
    {
        $commentaire = Commentaire::find($id);
        $this->authorize('update', $commentaire);
        $request->validate([
         'user'=> 'required',
         'content'=> 'required',
        ]); // update_validated_anchor;
        $commentaire->user = $request->user;
        $commentaire->content = $request->content;
        $commentaire->post_id = $request->post_id;
        $commentaire->save(); // update_anchor
        return redirect()->route("commentaires.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $commentaire = Commentaire::find($id);
        $this->authorize('delete', $commentaire);
        $commentaire->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
