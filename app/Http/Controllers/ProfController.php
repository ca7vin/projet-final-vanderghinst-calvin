<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    //
    public function index()
    {
        $profs = Prof::all();
        return view("/back/profs/all",compact("profs"));
    }
    public function create()
    {
        return view("/back/profs/create");
    }
    public function store(Request $request)
    {
        $prof = new Prof;
        $request->validate([
         'subject'=> 'required',
         'bio_short'=> 'required',
         'bio_long'=> 'required',
         'phone'=> 'required',
         'skype'=> 'required',
        ]); // store_validated_anchor;
        $prof->subject = $request->subject;
        $prof->bio_short = $request->bio_short;
        $prof->bio_long = $request->bio_long;
        $prof->phone = $request->phone;
        $prof->skype = $request->skype;
        $prof->save(); // store_anchor
        return redirect()->route("user.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $prof = Prof::find($id);
        return view("/back/profs/read",compact("prof"));
    }
    public function onepage($id)
    {
        $prof = Prof::find($id);
        return view("/front/pages/single-teacher",compact("prof"));
    }
    public function edit($id)
    {
        $prof = Prof::find($id);
        return view("/back/profs/edit",compact("prof"));
    }
    public function update($id, Request $request)
    {
        $prof = Prof::find($id);
        $request->validate([
         'subject'=> 'required',
         'bio_short'=> 'required',
         'bio_long'=> 'required',
         'phone'=> 'required',
         'skype'=> 'required',
        ]); // update_validated_anchor;
        $prof->subject = $request->subject;
        $prof->bio_short = $request->bio_short;
        $prof->bio_long = $request->bio_long;
        $prof->phone = $request->phone;
        $prof->skype = $request->skype;
        $prof->save(); // update_anchor
        return redirect()->route("user.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $prof = Prof::find($id);
        $prof->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
