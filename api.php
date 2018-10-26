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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('obtenerLogro','logrosDP@index');
Route::get('mostrarLogro/{id}','logrosDP@show');
Route::post('insertarLogro','logrosDP@store');
Route::put('actualizarLogro/{id}','logrosDP@update');
Route::delete('borrarLogro/{id}','logrosDP@delete');

Route::get('obtenerModalidad','modalidadDP@index');
Route::get('mostrarModalidad/{id}','modalidadDP@show');
Route::post('insertarModalidad','modalidadDP@store');
Route::put('actualizarModalidad/{id}','modalidadDPP@update');
Route::delete('borrarModalidad/{id}','modalidadDP@delete');
