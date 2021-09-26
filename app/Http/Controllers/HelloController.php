<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{

  public function index(Request $req)
  {
    $items = DB::select('select * from people');

    return view('people',array('items' => $items));
  }
}
