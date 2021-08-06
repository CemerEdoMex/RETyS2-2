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

Route::POST('tarjetas','AdminRetys@btarjetas')->name('tarjetas') ;/*ruta de tarGETas */

Route::GET('personasgob','AdminRetys@bpersonasgob')->name('personasgob') ;/*ruta personas */


Route::GET('categoria','Adminretys@category')->name('category');



/*
|--------------------------------------------------------------------------
|  Municipios
|--------------------------------------------------------------------------
|*/

Route::GET('/municipios','Adminretys@municipios')->name('municipios');
Route::POST('/municipios/{municipio}/{clave}','Adminretys@municipioDetalle')->name('municipio');

/*
|--------------------------------------------------------------------------
| Areas Gobiernos Rutas
|--------------------------------------------------------------------------
|*/


Route::POST('/areasgog/{idsujeto}','Adminretys@areasGobDetalle')->name('areasgog')->where('idsujeto', '[0-9]+');;


Route::GET('/areasgob','Adminretys@areasGob')->name('areasgob');

Route::GET('/cedulaTram', 'AdminRetys@cedula') ->name('cedulaTram');

/*
|-------------------------------------------------------------------------
| Rutas para archivos PDF
|-------------------------------------------------------------------------
|*/
Route::GET('/pdf/{idtramserv}','PDF_Controller@create')->name('pdf');

/*
|--------------------------------------------------------------------------
| Trasnparencia Rutas
|--------------------------------------------------------------------------
|*/

Route::GET('fichainformativa','AdminRetys@trasnparencia')->name('fichainformativa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Categorias  Rutas
|--------------------------------------------------------------------------
|*/
route::GET('catego/{id_tem}/{ncatego}/{pagina?}','Adminretys@bptema')->name('catego');

/*
|--------------------------------------------------------------------------
| Categorias  Rutas
|--------------------------------------------------------------------------
|*/
route::GET('Personas/{id_per}/{nperson}/{pagina?}','Adminretys@bppersona')->name('Personas');

/*
|--------------------------------------------------------------------------
| Enlinea Ruta
|--------------------------------------------------------------------------
|*/
route::GET('enlinea','Adminretys@benlinea')->name('enlinea');

/*
|--------------------------------------------------------------------------
| pdf ficha de información de tramite
|--------------------------------------------------------------------------
|*/
route::GET('fichapdf/{id_tram}','Adminretys@pdf_fichan')->name('fichapdf');

route::POST('cedulainfo/{id_tram?}','Adminretys@cedulainformacion')->name('cedulainfo')->where('id_tram', '[0-9]+');

/*
|-------------------------------------------------------------------------
| Trial Rutes
|-------------------------------------------------------------------------
/*/
Route::get('/prueba', function () {
    return view('VistasRetys.newCards');
});


/*
|-------------------------------------------------------------------------
| Ruta de respaldo
|-------------------------------------------------------------------------
/*/
Route::fallback(function() {
     return view('404');
});
