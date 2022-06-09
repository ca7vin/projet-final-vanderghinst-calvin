<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        $categories = Categorie::all();
        if (! Gate::allows('create-course')) {
            abort(403);
        }
        return view("/back/courses/create",compact("categories"));
    }
    public function store(Request $request)
    {
        $course = new Course;
        $this->authorize('create', Course::class);
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
        if (Auth::user()->role_id === 2) {
            $course->prof_id = Auth::user()->prof->id;
        } elseif (Auth::user()->role_id === 1) {
            $course->prof_id = null;
        }
        $course->title = $request->title;
        if (Course::all()->where('favori', '==', 1)->count() >= 8) {
            $course->favori = 0;
        } else {
            $course->favori = $request->favori;
        }
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
        // default image
        if ($request->image === null) {
            $course->image = "courseImg.jpeg";
        } else {
            $course->image = $request->image->hashName();
            $request->file('image')->storePublicly('images', 'public');
        }
        $course->status = false;
        $course->save(); // store_anchor
        $course->categories()->attach($request->categories, [
            'course_id' => $course->id,
        ]);
        return redirect()->route("courses.index")->with('message', "Successful storage !");
    }
    public function show($id)
    {
        $course = Course::find($id);
        return view("/back/courses/read",compact("course"));
    }
    public function onepage($id)
    {
        $course = Course::find($id);
        return view("/front/pages/single-course", compact("course"));
    }
    public function edit($id)
    {
        $course = Course::find($id);
        $categories = Categorie::all();
        if (! Gate::allows('update-course', $course)) {
            abort(403);
        }
        return view("/back/courses/edit",compact("course", "categories"));
    }
    public function update($id, Request $request)
    {
        $course = Course::find($id);
        $this->authorize('update', $course);
        $request->validate([
         'title'=> 'required',
         'description'=> 'required',
         'discipline'=> 'required',
         'price'=> 'required',
         'level'=> 'required',
         'start'=> 'required',
         'duration'=> 'required',
        ]); // update_validated_anchor;
        $course->prof_id = $course->prof_id;
        $course->title = $request->title;
        if (Course::all()->where('favori', '==', 1)->count() >= 8) {
            $course->favori = 0;
        } else {
            $course->favori = $request->favori;
        }
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
        // default image
        if ($request->image === null) {
            $course->image = $course->image;
        } else {
            $course->image = $request->image->hashName();
            $request->file('image')->storePublicly('images', 'public');
        }
        // course status if admin
        if (Auth::user()->role_id === 2) {
            $course->status = $course->status;
        } else if (Auth::user()->role_id === 1) {
            $course->status = $request->status;
        }
        $course->save(); // update_anchor
        $course->categories()->sync($request->categories, [
            'course_id' => $course->id,
        ]);
        return redirect()->route("courses.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $course = Course::find($id);
        $this->authorize('delete', $course);
        $course->categories()->detach();
        $course->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
