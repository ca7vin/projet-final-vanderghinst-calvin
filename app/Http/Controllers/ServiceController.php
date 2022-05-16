<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        return view("/back/services/all",compact("services"));
    }
    public function create()
    {
        return view("/back/services/create");
    }
    public function store(Request $request)
    {
        $service = new Service;
        $request->validate([
         'icon'=> 'required',
         'title'=> 'required',
         'text'=> 'required',
        ]); // store_validated_anchor;
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save(); // store_anchor
        return redirect()->route("service.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $service = Service::find($id);
        return view("/back/services/read",compact("service"));
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view("/back/services/edit",compact("service"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $request->validate([
         'icon'=> 'required',
         'title'=> 'required',
         'text'=> 'required',
        ]); // update_validated_anchor;
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save(); // update_anchor
        return redirect()->route("service.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
