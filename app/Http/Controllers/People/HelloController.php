<?php

namespace App\Http\Controllers\People;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{

  public function index(Request $req)
  {
    $items = Person::getPeople();
    // dd($items);
    $a = $req->a;
    $b = $req->b;

    return view('people.people',array('items' => $items,'a' => $a,'b' => $b));
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

  public function delete(Request $req)
  {
    // dd($req);
    $delete = DB::table('people')->where('id',$req->id)->delete();
    if($delete){
      return redirect('people')->with('message','削除完了');
    }else{
      return redirect('people')->with('message','削除失敗');
    }
  }

  public function search(Request $req)
  {
    $input = $req->input;
    $items = DB::table('people')->where('name','like','%'.$input.'%')->distinct()->paginate(10);

    return view('people.people',array('old_value' => $input,'items' => $items));
  }
}
