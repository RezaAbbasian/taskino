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

Route::get('/', 'TaskController@index');
Route::get('/createTask', 'TaskController@create');
Route::post('/storeTask', 'TaskController@store');
Route::get('/editTask', 'TaskController@edit');
Route::post('/updateTask','TaskController@update');
Route::post('/deleteTask', 'TaskController@delete');
