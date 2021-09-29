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

#Route::get('/','HomeController@index');
Route::get('/people','HelloController@index');
Route::get('/people/add','HelloController@add');
Route::post('/people/insert','HelloController@insert');
Route::get('/people/edit/{id}','HelloController@edit');
Route::post('/people/update','HelloController@update');
Route::post('/people/search','HelloController@search');
Route::get('/people/delete/{id}','HelloController@delete');


/**
* 本の一覧表示(books.blade.php)
*/
Route::get('/books', 'BooksController@index');

Route::get('/edit/{id}','BooksController@edit');

/**
* 本を追加
*/
Route::post('/books/insert','BooksController@insert');

Route::post('/books/update', 'BooksController@update');

/**
* 本を削除
*/
Route::post('/books/delete', 'BooksController@delete');


// Auth::routes();

// Route::get('/home', 'BooksController@index')->name('home');

// Route::group(['middleware' => 'auth'],function(){
//   Route::get('/books','BooksController@index');
// });

