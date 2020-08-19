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

Route::GET('/','AdminRetys@index');

Route::GET('inicio','AdminRetys@index')->name('inicio');

Route::GET('tarjetas','AdminRetys@btarjetas')->name('tarjetas') ;/*ruta de tarGETas */
Route::GET('areasgob','AdminRetys@bareasgob')->name('areasgob') ;/*Areas de Gobierno */
Route::GET('personasgob','AdminRetys@bpersonasgob')->name('personasgob') ;/*Areas de Gobierno */


Route::GET('prueba','AdminRetys@prueba')->name('prueba');
