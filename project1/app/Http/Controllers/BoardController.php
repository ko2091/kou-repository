<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
use App\person;

class BoardController extends Controller
{

    public function index(Request $request)
    {

        //$items = Board::with('person')->get();
        //本来は上、ぺジネーションで５まで表示
        $items = Board::with('person')->Paginate(5);
        // $items = Board::with('person')->simplePaginate(5);
        return view('board.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }

}

