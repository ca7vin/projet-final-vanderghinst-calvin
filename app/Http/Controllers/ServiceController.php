<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        $icons = Icon::all();
        return view("/back/services/all",compact("services", "icons"));
    }
    public function create()
    {
        if (! Gate::allows('create-service')) {
            abort(403);
        }
        $icons = Icon::all();
        return view("/back/services/create", compact("icons"));
    }
    public function store(Request $request)
    {
        $service = new Service;
        $this->authorize('create', Service::class);
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
    public function show($id)
    {
        $service = Service::find($id);
        return view("/back/services/read",compact("service"));
    }
    public function edit($id)
    {
        $service = Service::find($id);
        if (! Gate::allows('update-service', $service)) {
            abort(403);
        }
        $icons = Icon::all();
        return view("/back/services/edit",compact("service", "icons"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $this->authorize('update', $service);
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
        $this->authorize('delete', $service);
        $service->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
