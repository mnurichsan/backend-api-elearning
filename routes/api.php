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

Route::post('/login', 'API\UserController@login');
Route::get('/kelas/{id}', 'API\KelasController@getKelas');


Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/mymapel', 'API\MapelController@getMyMapel');
    Route::get('/mymapel/{id}', 'API\MapelController@detailMyMapel');
    Route::get('/myprofil', 'API\UserController@myProfil');
    Route::post('/logout', 'API\UserController@logout');
});
