<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/', 'usuarioDP@getUsers');
Route::get('/users/{id}', 'usuarioDP@findUser');
Route::post('/users/', 'usuarioDP@saveUser');
Route::put('/users/{id}', 'usuarioDP@updateUser');
Route::delete('/users/{id}', 'usuarioDP@deleteUser');