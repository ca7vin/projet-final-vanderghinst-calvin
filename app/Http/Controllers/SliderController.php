<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::all();
        return view("/back/sliders/all",compact("sliders"));
    }
    public function create()
    {
        return view("/back/sliders/create");
    }
    public function store(Request $request)
    {
        $slider = new Slider;
        $request->validate([
         'first'=> 'required',
         'image'=> 'required',
         'title'=> 'required',
         'text'=> 'required',
         'textorange'=> 'required',
         'btntext'=> 'required',
         'btnlink'=> 'required',
        ]); // store_validated_anchor;
        $slider->first = $request->first;
        $slider->image = $request->image;
        $slider->title = $request->title;
        $slider->text = $request->text;
        $slider->textorange = $request->textorange;
        $slider->btntext = $request->btntext;
        $slider->btnlink = $request->btnlink;
        $slider->save(); // store_anchor
        return redirect()->route("slider.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $slider = Slider::find($id);
        return view("/back/sliders/read",compact("slider"));
    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view("/back/sliders/edit",compact("slider"));
    }
    public function update($id, Request $request)
    {
        $slider = Slider::find($id);
        $request->validate([
         'first'=> 'required',
         'image'=> 'required',
         'title'=> 'required',
         'text'=> 'required',
         'textorange'=> 'required',
         'btntext'=> 'required',
         'btnlink'=> 'required',
        ]); // update_validated_anchor;
        $slider->first = $request->first;
        $slider->image = $request->image;
        $slider->title = $request->title;
        $slider->text = $request->text;
        $slider->textorange = $request->textorange;
        $slider->btntext = $request->btntext;
        $slider->btnlink = $request->btnlink;
        $slider->save(); // update_anchor
        return redirect()->route("slider.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}