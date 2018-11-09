<?php
use Illuminate\Http\Request;
Route::middleware('auth:api')->get('/achievement', function (Request $request) {
    return $request->achievement();
});
Route::get('/Achievement/', 'usuarioDP@getAchievement');
Route::get('/Achievement/{id}', 'usuarioDP@findAchievement');
Route::post('/Achievement/', 'usuarioDP@saveAchievement');
Route::put('/Achievement/{id}', 'usuarioDP@updateAchievement');
Route::delete('/Achievement/{id}', 'usuarioDP@deleteAchievement');