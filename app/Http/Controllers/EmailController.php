<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function index()
    {
        $emails = Email::all();
        return view("/back/emails/all",compact("emails"));
    }
    public function create()
    {
        return view("/back/emails/create");
    }
    public function store(Request $request)
    {
        $email = new Email;
        $request->validate([
         'email'=> 'required',
        ]); // store_validated_anchor;
        $email->email = $request->email;
        $email->save(); // store_anchor
        return redirect()->route("email.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $email = Email::find($id);
        return view("/back/emails/read",compact("email"));
    }
    public function edit($id)
    {
        $email = Email::find($id);
        return view("/back/emails/edit",compact("email"));
    }
    public function update($id, Request $request)
    {
        $email = Email::find($id);
        $request->validate([
         'mail'=> 'required',
        ]); // update_validated_anchor;
        $email->email = $request->email;
        $email->save(); // update_anchor
        return redirect()->route("email.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $email = Email::find($id);
        $email->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}