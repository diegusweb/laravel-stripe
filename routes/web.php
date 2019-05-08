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


Route::post('/pago', 'SuscripcionController@pago');

Route::get('/suscripcion', function () {
    return view('suscripcion');
});

Route::post('/procesa-suscripcion', 'SuscripcionController@procesa_suscripcion');