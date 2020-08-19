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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','AdminRetys@index');

Route::GET('inicio','AdminRetys@index')->name('inicio');

Route::get('tarjetas','AdminRetys@btarjetas')->name('tarjetas') ;/*ruta de targetas */
Route::get('areasgob','AdminRetys@bareasgob')->name('areasgob') ;/*Areas de Gobierno */
Route::get('personasgob','AdminRetys@bpersonasgob')->name('personasgob') ;/*Areas de Gobierno */