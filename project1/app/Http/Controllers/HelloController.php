<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //
    public function index(Request $request){

    	$items = DB::select('select * from people');
    	
    	//var_dump($items);exit;
        return view('hello.index',['items' => $items]);
}

	public function rest(Request $request)
	{
		return view('hello.rest');
	}

}
