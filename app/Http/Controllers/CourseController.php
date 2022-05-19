<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
        $courses = Course::all();
        return view("/back/courses/all",compact("courses"));
    }
    public function create()
    {
        return view("/back/courses/create");
    }
    public function store(Request $request)
    {
        $course = new Course;
        $request->validate([
        //  'prof'=> 'required',
         'title'=> 'required',
         'description'=> 'required',
         'discipline'=> 'required',
         'price'=> 'required',
         'level'=> 'required',
         'start'=> 'required',
         'duration'=> 'required',
        ]); // store_validated_anchor;
        if (auth()->user()->role_id === 2) {
            $course->prof_id = auth()->user()->prof->id;
        } elseif (auth()->user()->role_id === 1) {
            $course->prof_id = auth()->user()->id;
        }
        $course->title = $request->title;
        $course->description = $request->description;
        $course->discipline = $request->discipline;
        $course->price = $request->price;
        $course->level = $request->level;
        $course->start = $request->start;
        $course->duration = $request->duration;
        if ($course->price == "Free") {
            $course->price_color = "price-yellow";
        } else {
            $course->price_color = "price-red";
        }
        $course->save(); // store_anchor
        return redirect()->route("course.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $course = Course::find($id);
        return view("/back/courses/read",compact("course"));
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view("/back/courses/edit",compact("course"));
    }
    public function update($id, Request $request)
    {
        $course = Course::find($id);
        $request->validate([
         'title'=> 'required',
         'description'=> 'required',
         'discipline'=> 'required',
         'price'=> 'required',
         'level'=> 'required',
         'start'=> 'required',
         'duration'=> 'required',
        ]); // update_validated_anchor;
        $course->prof = $course->prof;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->discipline = $request->discipline;
        $course->price = $request->price;
        $course->level = $request->level;
        $course->start = $request->start;
        $course->duration = $request->duration;
        if ($course->price == "Free") {
            $course->price_color = "price-yellow";
        } else {
            $course->price_color = "price-red";
        }
        $course->save(); // update_anchor
        return redirect()->route("course.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
