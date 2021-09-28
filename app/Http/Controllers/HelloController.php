<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\DB;
use Validator;

class HelloController extends Controller
{

  public function index(Request $req)
  {
    $items = Person::getPeople();
    // dd($items);

    return view('people',array('items' => $items));
  }

  public function add()
  {
    return view('add');
  }

  public function insert(Request $req)
  {
    dd($req->name);
    $validator = Person::getInsertPersonValidator($req);

    if($validator->fails()){
      return redirect('add')
      ->withInput()
      ->withErrors($validator);
    }

    $success = Person::insertPerson($req);
    if($success){
      return redirect('/');
    }
  }
}
