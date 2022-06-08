<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Email;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        foreach ($events as $event) {
            $event->date = str_replace("[", "<span>", $event->date);
            $event->date = str_replace("]", "</span>", $event->date);
        } 
        return view("/back/events/all",compact("events"));
    }
    public function create()
    {
        if (! Gate::allows('create-event')) {
            abort(403);
        }
        $categories = Categorie::all();
        return view("/back/events/create", compact("categories"));
    }
    public function store(Request $request)
    {
        $event = new Event;
        $this->authorize('create', Event::class);
        $emails = Email::all();
        $request->validate([
         'start_time'=> 'required',
         'end_time'=> 'required',
         'title'=> 'required',
         'description'=> 'required',
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
        if ($request->image1 == null) {
            $event->image1 = "event1.jpg";
        } else {
            $event->image1 = $request->image1->hashName();;
            $request->file('image1')->storePublicly('images', 'public');
        }
        if ($request->image2 == null) {
            $event->image2 = "event2.jpg";
        } else {
            $event->image2 = $request->image2->hashName();;
            $request->file('image2')->storePublicly('images', 'public');
        }
        if ($request->image3 == null) {
            $event->image3 = "event3.jpg";
        } else {
            $event->image3 = $request->image3->hashName();;
            $request->file('image3')->storePublicly('images', 'public');
        }
        $event->phone = $request->phone;
        $event->email = $request->email;
        $event->location = $request->location;
        $event->date = $request->date;
        $event->save(); // store_anchor
        foreach ($emails as $email) {
            Mail::send('emails.event', array( 
                'email' => $email->email, 
                'title' => $event->title,
                'description' => $event->description,
                'date' => $event->date,
                'location' => $event->location,
                'start_time' => $event->start_time,
                'end_time' => $event->end_time,
                'phone' => $event->phone,
                'email2' => $event->email,
            ), function($message) use ($email){ 
                $message->to($email->email, 'Admin'); 
                $message->from('ca7vin@gmail.com');
            });
        }
        $event->categories()->attach($request->categories, [
            'event_id' => $event->id,
        ]);
        return redirect()->route("event.index")->with('message', "Successful storage !");
    }
    public function show($id)
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
        if (! Gate::allows('update-event', $event)) {
            abort(403);
        }
        $categories = Categorie::all();
        return view("/back/events/edit",compact("event", "categories"));
    }
    public function update($id, Request $request)
    {
        $event = Event::find($id);
        $this->authorize('update', $event);
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
        $event->categories()->sync($request->categories, [
            'event_id' => $event->id,
        ]);
        return redirect()->route("event.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $event = Event::find($id);
        $this->authorize('delete', $event);
        $event->categories()->detach();
        $event->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
