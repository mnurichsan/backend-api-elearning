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


Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {

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
    Route::get('/content/kelas/{slug}/mapel/{mapel}', 'ContentController@showMapel')->name('mapel.show');
    Route::post('/content/kelas/{slug}/mapel/store', 'ContentController@storeMapel')->name('mapel.store');
    Route::get('/content/kelas/{slug}/mapel/edit/{id}', 'ContentController@editMapel')->name('mapel.edit');
    Route::put('/content/kelas/{slug}/mapel/update/{id}', 'ContentController@updateMapel')->name('mapel.update');
    Route::delete('/content/kelas/{slug}/mapel/delete/{id}', 'ContentController@deleteMapel')->name('mapel.delete');
    Route::get('/content/kelas/{slug}/{id}', 'ContentController@detailKelas')->name('detail.kelas');

    //tugas
    Route::get('/content/kelas/{kelas}/mapel/{mapel}/tugas', 'TugasController@index')->name('tugas.index');
    Route::get('/content/kelas/{kelas}/mapel/{mapel}/tugas/edit/{id}', 'TugasController@edit')->name('tugas.edit');
    Route::put('/content/kelas/{kelas}/mapel/{mapel}/tugas/update/{id}', 'TugasController@update')->name('tugas.update');
    Route::post('/content/kelas/{kelas}/mapel/{mapel}/tugas', 'TugasController@store')->name('tugas.store');
    Route::get('/content/kelas/{kelas}/mapel/{mapel}/tugas/create', 'TugasController@create')->name('tugas.create');
    Route::delete('/content/kelas/{kelas}/mapel/{mapel}/tugas/delete/{id}', 'TugasController@destroy')->name('tugas.delete');
    Route::get('/content/kelas/{kelas}/mapel/{mapel}/kumpul-tugas/{id}', 'KumpulTugasController@index')->name('tugas.kumpul');
    Route::delete('/content/kelas/{kelas}/mapel/{mapel}/kumpul-tugas/delete/{id}', 'KumpulTugasController@destroy')->name('delete.kumpul');
});
