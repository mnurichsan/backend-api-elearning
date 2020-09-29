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

//Kelas
Route::get('/kelas/trash', 'KelasController@getTrash')->name('kelas.trash');
Route::get('/kelas/trash/{id}/restore', 'KelasController@restore')->name('kelas.restore');
Route::delete('/kelas/trash/{id}', 'KelasController@delete')->name('kelas.delete');
Route::resource('/kelas', 'KelasController');

//guru
Route::resource('/guru', 'GuruController');

//siswa
Route::resource('/siswa', 'SiswaController');

//content
Route::get('/content', 'ContentController@index')->name('content.index');
Route::get('/content/{id}', 'ContentController@contentKelas')->name('content.kelas');
Route::get('/content/kelas/{slug}/mapel/create', 'ContentController@createMapel')->name('mapel.create');
Route::post('/content/kelas/{slug}/mapel/store', 'ContentController@storeMapel')->name('mapel.store');
Route::get('/content/kelas/{slug}/mapel/edit/{id}', 'ContentController@editMapel')->name('mapel.edit');
Route::delete('/content/kelas/{slug}/mapel/delete/{id}', 'ContentController@deleteMapel')->name('mapel.delete');
Route::get('/content/kelas/{slug}/{id}', 'ContentController@detailKelas')->name('detail.kelas');
