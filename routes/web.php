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

//Route::GET('/','AdminRetys@test');

Route::GET('/','AdminRetys@index');

Route::GET('inicio','AdminRetys@index')->name('inicio');

Route::GET('tarjetas','AdminRetys@btarjetas')->name('tarjetas') ;/*ruta de tarGETas */
Route::GET('areasgob','AdminRetys@bareasgob')->name('areasgob') ;/*Areas de Gobierno */
Route::GET('personasgob','AdminRetys@bpersonasgob')->name('personasgob') ;/*Areas de Gobierno */


Route::GET('categoria','Adminretys@category')->name('category');

Route::GET('/minicipios','Adminretys@municipios')->name('municipios');
Route::GET('/municipios/{clave}','Adminretys@municipioDetalle')->name('municipio');


Route::GET('/areasgob','Adminretys@areasGob')->name('areasgob');

Route::GET('prueba','AdminRetys@prueba')->name('prueba');

/*
|--------------------------------------------------------------------------
| Trasnparencia Rutas
|--------------------------------------------------------------------------
|*/

Route::GET('trasnparencia','AdminRetys@trasnparencia')->name('trasnparencia');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Categorias  Rutas
|--------------------------------------------------------------------------
|*/
route::GET('catego/{id_tem}','Adminretys@bptema')->name('catego');

/*
|--------------------------------------------------------------------------
| Categorias  Rutas
|--------------------------------------------------------------------------
|*/
route::GET('Personas/{id_per}/{ncat}','Adminretys@bppersona')->name('Personas');

