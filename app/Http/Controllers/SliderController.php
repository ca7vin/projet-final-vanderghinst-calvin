<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class SliderController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::all();
        foreach ($sliders as $slide) {
            $slide->title = str_replace("//", "<br>", $slide->title);
            $slide->text = str_replace("//", "<br>", $slide->text);
            
        } 
        $this->authorize('viewAny', Slider::class);
        return view("/back/sliders/all",compact("sliders"));
    }
    public function create()
    {
        if (! Gate::allows('create-slider')) {
            abort(403);
        }
        return view("/back/sliders/create");
    }
    public function store(Request $request)
    {
        $slider = new Slider;
        $this->authorize('create', Slider::class);
        $request->validate([
         'first'=> 'required',
        //  'image'=> 'required',
         'title'=> 'required',
         'text'=> 'required',
         'textorange'=> 'required',
         'btntext'=> 'required',
         'btnlink'=> 'required',
        ]); // store_validated_anchor;
        $slider->first = $request->first;
        $slider->title = $request->title;
        $slider->text = $request->text;
        $slider->textorange = $request->textorange;
        $slider->btntext = $request->btntext;
        $slider->btnlink = $request->btnlink;
        // priorité display
        if ($request->first === "1") {
            Slider::where('first', "1")->update(['first' => "0"]);
            $slider->first = "1";
        }
        // default image
        if ($request->image === null) {
            $slider->image = "wallpaper1.jpeg";
        } else {
            $slider->image = $request->image->hashName();
            $request->file('image')->storePublicly('images', 'public');
        }
        $slider->save(); // update_anchor
        return redirect()->route("sliders.index")->with('message', "Successful storage !");
    }
    public function show($id)
    {
        $slider = Slider::find($id);
        $this->authorize('view', $slider);
        return view("/back/sliders/read",compact("slider"));
    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        if (! Gate::allows('update-slider', $slider)) {
            abort(403);
        }
        return view("/back/sliders/edit",compact("slider"));
    }
    public function update($id, Request $request)
    {
        $slider = Slider::find($id);
        $this->authorize('update', $slider);
        $request->validate([
         'first'=> 'required',
        //  'image'=> 'required',
         'title'=> 'required',
         'text'=> 'required',
         'textorange'=> 'required',
         'btntext'=> 'required',
         'btnlink'=> 'required',
        ]); // update_validated_anchor;
        $slider->first = $request->first;
        $slider->title = $request->title;
        $slider->text = $request->text;
        $slider->textorange = $request->textorange;
        $slider->btntext = $request->btntext;
        $slider->btnlink = $request->btnlink;
        // priorité display
        if ($request->first === "1") {
            Slider::where('first', "1")->update(['first' => "0"]);
            $slider->first = "1";
        }
        // default image
        if ($request->image === null) {
            $slider->image = $slider->image;
        } else {
            $slider->image = $request->image->hashName();
            $request->file('image')->storePublicly('images', 'public');
        }
        $slider->save(); // update_anchor
        return redirect()->route("sliders.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $this->authorize('delete', $slider);
        $slider->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
