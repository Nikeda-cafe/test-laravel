<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;
use App\Models;

class HelloController extends Controller
{

  public function index(Request $req)
  {
    $items = Person::getPeople();
    // dd($items);

    return view('people',array('items' => $items));
  }
}
