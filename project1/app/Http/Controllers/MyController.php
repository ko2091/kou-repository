<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function index(Request $request)
    {
    	return view('my.index');
    }
}
