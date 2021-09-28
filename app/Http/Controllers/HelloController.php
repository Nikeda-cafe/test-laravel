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

    return view('people.people',array('items' => $items));
  }

  public function add()
  {
    return view('people.add');
  }

  public function insert(Request $req)
  {
    dd($req->name);
    $validator = Person::getInsertPersonValidator($req);

    if($validator->fails()){
      return redirect('/public/people/add')
      ->withInput()
      ->withErrors($validator);
    }

    $success = Person::insertPerson($req);
    if($success){
      return redirect('/public/people');
    }
  }

  public function edit(Request $req)
  {
    $editId = $req->id;
    // dd($editId);
    $items = Person::getPersonInfoById($editId);

    return view('people.edit',array('items' => $items));
  }

  public function update(Request $req)
  {
    $validator = Person::getInsertPersonValidator($req);
    if($validator->fails()){
      return redirect('people/edit/'.$req->id)
      ->withInput()
      ->withErrors($validator);
    }

    $success = Person::updatePersonInfo($req);
    // dd($success);
    if($success){
      return redirect('people');
    }
  }
}
