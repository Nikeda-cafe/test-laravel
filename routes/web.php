<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Book;
use Illuminate\Http\Request;

/**
* 本の一覧表示(books.blade.php)
*/
Route::get('/books', function () {
  $books = Book::orderBy('created_at','desc')->get();
  return view('books',array('books' => $books));
});

Route::get('/edit/{id}', function (Request $req) {
    $id = $req->id;
    // dd($id);
    $books = new Book;
    $entity = $books->find($id);
    // dd($entity->item_name);
  return view('edit',array('entity' => $entity));
});

/**
* 本を追加
*/
Route::post('/books', function (Request $request) {
  // バリデーション
  $validator = Validator::make($request->all(),array(
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
  $books->item_name = $request->item_name;
  $books->item_number = $request->item_number;
  $books->item_amount = $request->item_amount;
  $books->published = now();
  $books->save();
  return redirect('/books');

});

Route::post('/books/update', function (Request $request) {
  // バリデーション
  $validator = Validator::make($request->all(),array(
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
  $books = Book::find($request->id);
  $books->item_name = $request->item_name;
  $books->item_number = $request->item_number;
  $books->item_amount = $request->item_amount;
  $books->published = now();
  $books->save();
  return redirect('/books');

});

/**
* 本を削除
*/
Route::delete('/book/{book}', function (Book $book) {
    //
    $book->delete();
    return redirect('/books');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

