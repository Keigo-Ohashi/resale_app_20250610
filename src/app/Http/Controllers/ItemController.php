<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index(Request $request)
    {
        $keyword = $request->input('keyword');
        return view("items.index", compact("keyword"));
    }
}
