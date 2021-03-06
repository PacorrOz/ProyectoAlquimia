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

Route::get('/', 'TransaccionController@inicio')->name('inicio');
Route::post('IngresaBillete', 'TransaccionController@IngresaBillete')->name('IngresaBillete');
Route::get('/finError', 'TransaccionController@finError')->name('finError');
Route::get('/finCancelar', 'TransaccionController@finCancelar')->name('finCancelar');
Route::get('/finAceptar/{b500}/{b200}/{b100}/{b50}/{b20}/{b10}/{b5}/{b2}/{b1}/{monto_show}', 'TransaccionController@finAceptar')->name('finAceptar');
Route::get('/Admin', 'adminController@inicio')->name('Admin');
Route::get('/adminCaja', 'adminController@adminCaja')->name('adminCaja');
Route::get('/adminOps', 'adminController@adminOps')->name('adminOps');
Route::post('cajaPost', 'adminController@cajaPost')->name('cajaPost');

