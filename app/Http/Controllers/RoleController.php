<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::all();
        return view("/back/roles/all",compact("roles"));
    }
    public function read($id)
    {
        $role = Role::find($id);
        return view("/back/roles/read",compact("role"));
    }
}
