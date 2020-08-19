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

Route::name('tarjetas')->get('tarjetas','AdminRetys@btarjetas') ;/*ruta de targetas */
Route::name('areasgob')->get('areasgob','AdminRetys@bareasgob') ;/*Areas de Gobierno */
Route::name('personasgob')->get('personasgob','AdminRetys@bpersonasgob') ;/*Areas de Gobierno */