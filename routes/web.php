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

// 修正
Route::get('/todo/create', 'TodoController@create')->name('todo.create');

// 追加
Route::post('/todo', 'TodoController@store')->name('todo.store');
// 追加
Route::get('/todo', 'TodoController@index')->name('todo.index');
// 追加
Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');

// 追加
Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');
Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');

// 追加
Route::delete('/todo/{id}', 'TodoController@delete')->name('todo.delete');