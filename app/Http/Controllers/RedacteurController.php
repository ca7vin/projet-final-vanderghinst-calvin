<?php

namespace App\Http\Controllers;

use App\Models\Redacteur;
use Illuminate\Http\Request;

class RedacteurController extends Controller
{
    //
    public function index()
    {
        $redacteurs = Redacteur::all();
        return view("/back/redacteurs/all",compact("redacteurs"));
    }
    public function create()
    {
        return view("/back/redacteurs/create");
    }
    public function store(Request $request)
    {
        $redacteur = new Redacteur;
        $request->validate([
        ]); // store_validated_anchor;
        $redacteur->save(); // store_anchor
        return redirect()->route("redacteurs.index")->with('message', "Successful storage !");
    }
    public function show($id)
    {
        $redacteur = Redacteur::find($id);
        return view("/back/redacteurs/read",compact("redacteur"));
    }
    public function edit($id)
    {
        $redacteur = Redacteur::find($id);
        return view("/back/redacteurs/edit",compact("redacteur"));
    }
    public function update($id, Request $request)
    {
        $redacteur = Redacteur::find($id);
        $request->validate([
        ]); // update_validated_anchor;
        $redacteur->save(); // update_anchor
        return redirect()->route("redacteurs.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $redacteur = Redacteur::find($id);
        $redacteur->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
