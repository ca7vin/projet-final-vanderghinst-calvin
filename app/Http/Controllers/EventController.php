<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        return view("/back/events/all",compact("events"));
    }
    public function create()
    {
        return view("/back/events/create");
    }
    public function store(Request $request)
    {
        $event = new Event;
        $request->validate([
         'start_time'=> 'required',
         'end_time'=> 'required',
         'title'=> 'required',
         'description'=> 'required',
         'image1'=> 'required',
         'image2'=> 'required',
         'image3'=> 'required',
         'phone'=> 'required',
         'email'=> 'required',
        ]); // store_validated_anchor;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->image1 = $request->image1;
        $event->image2 = $request->image2;
        $event->image3 = $request->image3;
        $event->phone = $request->phone;
        $event->email = $request->email;
        $event->save(); // store_anchor
        return redirect()->route("event.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $event = Event::find($id);
        return view("/back/events/read",compact("event"));
    }
    public function edit($id)
    {
        $event = Event::find($id);
        return view("/back/events/edit",compact("event"));
    }
    public function update($id, Request $request)
    {
        $event = Event::find($id);
        $request->validate([
         'start_time'=> 'required',
         'end_time'=> 'required',
         'title'=> 'required',
         'description'=> 'required',
         'image1'=> 'required',
         'image2'=> 'required',
         'image3'=> 'required',
         'phone'=> 'required',
         'email'=> 'required',
        ]); // update_validated_anchor;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->image1 = $request->image1;
        $event->image2 = $request->image2;
        $event->image3 = $request->image3;
        $event->phone = $request->phone;
        $event->email = $request->email;
        $event->save(); // update_anchor
        return redirect()->route("event.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
