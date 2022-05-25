<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::all();
        return view("/back/messages/all",compact("messages"));
    }
    public function create()
    {
        return view("/back/messages/create");
    }
    public function store(Request $request)
    {
        $message = new Message;
        $request->validate([
         'from'=> 'required',
        //  'to'=> 'required',
         'content'=> 'required',
        ]); // store_validated_anchor;
        $message->from = $request->from;
        $message->to = $request->to;
        $message->content = $request->content;
        $message->save(); // store_anchor
        return redirect()->back()->with('message', "Message bien envoyé !");
    }
    public function read($id)
    {
        $message = Message::find($id);
        return view("/back/messages/read",compact("message"));
    }
    public function edit($id)
    {
        $message = Message::find($id);
        return view("/back/messages/edit",compact("message"));
    }
    public function update($id, Request $request)
    {
        $message = Message::find($id);
        $request->validate([
         'from'=> 'required',
         'to'=> 'required',
         'content'=> 'required',
        ]); // update_validated_anchor;
        $message->from = $request->from;
        $message->to = $request->to;
        $message->content = $request->content;
        $message->save(); // update_anchor
        return redirect()->route("message.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
