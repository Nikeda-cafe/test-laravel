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

/**
* 本を追加
*/
Route::post('/books', function (Request $request) {
  // バリデーション
  $validator = Validator::make($request->all(),array(
    'item_name' => 'required|max:255',
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
  $books->item_number = '1';
  $books->item_amount = '1000';
  $books->published = now();
  $books->save();
  return redirect('/books');

});

/**
* 本を削除
*/
Route::delete('/book/{book}', function (Book $book) {
    //
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

