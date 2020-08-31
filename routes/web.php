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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//jurusan
Route::get('/jurusan/trash', 'JurusanController@getTrash')->name('jurusan.trash');
Route::get('/jurusan/trash/{id}/restore', 'JurusanController@restore')->name('jurusan.restore');
Route::delete('/jurusan/trash/{id}', 'JurusanController@delete')->name('jurusan.delete');
Route::resource('/jurusan', 'JurusanController');
