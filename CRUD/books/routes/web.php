<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', "App\Http\Controllers\BooksController@displayBooks");
Route::get('/addbook',function(){
    return view("add");
});
Route::get('/editbook/{id}',"App\Http\Controllers\BooksController@editBooks");

Route::post('/updatebook/{id}',"App\Http\Controllers\BooksController@updateBooks");

Route::get('/deletebook/{id}',"App\Http\Controllers\BooksController@deleteBooks");

Route::post('/postbook',"App\Http\Controllers\BooksController@addBooks");
