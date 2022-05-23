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
        //  'image1'=> 'required',
        //  'image2'=> 'required',
        //  'image3'=> 'required',
         'phone'=> 'required',
         'email'=> 'required',
         'date'=> 'required',
         'location'=> 'required',
        ]); // store_validated_anchor;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->user_id = auth()->user()->id;
        // default image
        if ($request->image1 === null) {
            $event->image1 = "event1.jpeg";
        } else {
            $event->image1 = $request->image1->hashName();;
            $request->file('image1')->storePublicly('images', 'public');
        }
        if ($request->image2 === null) {
            $event->image2 = "event2.jpeg";
        } else {
            $event->image2 = $request->image2->hashName();;
            $request->file('image2')->storePublicly('images', 'public');
        }
        if ($request->image3 === null) {
            $event->image3 = "event3.jpeg";
        } else {
            $event->image3 = $request->image3->hashName();;
            $request->file('image3')->storePublicly('images', 'public');
        }
        $event->phone = $request->phone;
        $event->email = $request->email;
        $event->location = $request->location;
        $event->date = $request->date;
        $event->save(); // store_anchor
        return redirect()->route("event.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $event = Event::find($id);
        return view("/back/events/read",compact("event"));
    }
    public function onepage($id)
    {
        $event = Event::find($id);
        return view("/front/pages/single-event",compact("event"));
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
        //  'image1'=> 'required',
        //  'image2'=> 'required',
        //  'image3'=> 'required',
         'phone'=> 'required',
         'email'=> 'required',
        ]); // update_validated_anchor;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->title = $request->title;
        $event->description = $request->description;
        // default image
        if ($request->image1 === null) {
            $event->image1 = $event->image1;
        } else {
            $event->image1 = $request->image1->hashName();;
            $request->file('image1')->storePublicly('images', 'public');
        }
        if ($request->image2 === null) {
            $event->image2 = $event->image2;
        } else {
            $event->image2 = $request->image2->hashName();;
            $request->file('image2')->storePublicly('images', 'public');
        }
        if ($request->image3 === null) {
            $event->image3 = $event->image3;
        } else {
            $event->image3 = $request->image3->hashName();;
            $request->file('image3')->storePublicly('images', 'public');
        }
        $event->phone = $request->phone;
        $event->email = $request->email;
        // default options
        if ($event->date === null) {
            $event->date = $event->date;
        } else{
            $event->date = $request->date;
        }
        if ($event->location === null) {
            $event->location = $event->location;
        } else{
            $event->location = $request->location;
        }
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
