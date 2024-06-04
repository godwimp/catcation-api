<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatInfoController extends Controller
{
    public function index()
    {
        return response()->json(CatInfo::all(), 200);
    }
}
