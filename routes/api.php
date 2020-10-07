<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/kelas/{id}', 'API\KelasController@getKelas');
Route::get('/mymapel/{id}', 'API\MapelController@getMyMapel');
Route::post('/kumpul-tugas/{tugas}/{user}', 'API\KumpulTugasController@store');
