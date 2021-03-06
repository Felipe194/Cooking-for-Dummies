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

Route::get('/', function () {
    return view('welcome');
});
Route::post('tips','TipsDP@obtenerTips');

Route::get('ingreso/', function () {
    return view('ingresoNumeroTip');
});

Route::post('productos','CarroComprasDP@obtenerProductos');

Route::get('ver/', function () {
    return view('carritoCompras');
});
Route::get('vista/', function () {
    return view('vistafinal');
});
