<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Auth;
use Validator;

class BooksController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');

  }

  public function index()
  {
    $books = Book::where('user_id',Auth::user()->id)
              ->orderBy('created_at','desc')
              ->paginate(3);
    return view('books',array('books' => $books));
  }

  public function insert(Request $req)
  {
    // バリデーション
    $validator = Validator::make($req->all(),array(
      'item_name' => 'required|max:255',
      'item_number' => 'required|min:1|max:3',
      'item_amount' => 'required|max:6'
    ));
    // ddd($validator->fails());
    // エラー処理
    if($validator->fails()){
      return redirect('/books')
        ->withInput()
        ->withErrors($validator);
    }

    // eloquent
    $books = new Book;
    $books->user_id = Auth::user()->id;
    $books->item_name = $req->item_name;
    $books->item_number = $req->item_number;
    $books->item_amount = $req->item_amount;
    $books->published = now();
    $books->save();
    return redirect('/books')->with('message','登録完了');
  }

  public function edit(Request $req)
  {
    $id = $req->id;

    $books = new Book;
    $entity = $books->find($id);


    return view('edit',array('entity' => $entity));
  }

  public function update(Request $req)
  {
    $validator = Validator::make($req->all(),array(
      'id' => 'required',
      'item_name' => 'required|max:255',
      'item_number' => 'required|min:1|max:3',
      'item_amount' => 'required|max:6'
    ));
    // ddd($validator->fails());
    // エラー処理
    if($validator->fails()){
      return redirect('/books')
        ->withInput()
        ->withErrors($validator);
    }

    // eloquent
    $books = Book::find($req->id);
    $books->user_id = Auth::user()->id;
    $books->item_name = $req->item_name;
    $books->item_number = $req->item_number;
    $books->item_amount = $req->item_amount;
    $books->published = now();
    $books->save();
    return redirect('/books');
  }

  public function delete(Request $req)
  {
    $id = $req->del_id;
    // dd($id);

    $books = new Book;
    $books->find($id)->delete();
    return redirect('/books');
  }

}
