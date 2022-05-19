<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;

class IconController extends Controller
{
    //
    public function index()
    {
        $icons = Icon::all();
        return view("/back/icons/all",compact("icons"));
    }
}
