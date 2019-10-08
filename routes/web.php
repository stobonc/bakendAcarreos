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

Route::get('/hello', function () {
     return view('welcome');
 });



//Route::resource('/', 'TasksController@getAll')->name('getAllProducts');
//Route::resource('tasks', 'TasksController');
Route::get('acarreos/{id}', 'AcarreosController@show');
Route::get('acarreos/', 'AcarreosController@index');
Route::post('acarreos/', 'AcarreosController@store');
Route::post('user/', 'UsuariosController@store');
Route::post('user/show', 'UsuariosController@show');


