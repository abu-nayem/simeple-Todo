<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/todos', 'HomeController@index')->name('home');
Route::get('/checkemail','EmailVarificationController@checkmail');
Route::get('/verify/{id}','EmailVarificationController@verify');


Route::get('/todo','TodoController@index')->name('index');
Route::post('/todos/create','TodoController@store')->name('todo.new');
Route::get('/todo/todos/edit/{id}','TodoController@edit');
Route::post('/todo/todos/update/','TodoController@update')->name('todo.update');
Route::get('/todo/todos/delete/{id}','TodoController@delete');
Route::get('/todo/todos/status/{id}','TodoController@status');
Route::get('/todo/todos/deleted-todo','TodoController@getDeletedData')->middleware('can:isAdmin')->name('todo.deleted');
Route::get('/todos/todo-list','TodoController@getTodoList')->name('todo.all');
Route::get('/todo/update/{staus}','TodoController@updateStatus');