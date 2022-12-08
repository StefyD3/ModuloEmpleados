<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/afiliaciones', function () {
    return view('afiliaciones');
});

Route::get('/cargos', function () {
    return view('cargos');
});

Route::get('/ccompensaciones', function () {
    return view('ccompensaciones');
});

Route::get('/empleados', function () {
    return view('empleados');
});

Route::get('/nominas', function () {
    return view('nominas');
});

Route::get('/novedades', function () {
    return view('novedades');
});

Route::get('/pensiones', function () {
    return view('pensiones');
});

Route::get('/riesgos', function () {
    return view('riesgos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas cargos
Route::get('api/cargos/index', 'CargosController@index');
Route::get('api/cargos/getSelect', 'CargosController@getSelect');
Route::post('api/cargos/guardar', 'CargosController@store');
Route::put('api/cargos/actualizar', 'CargosController@update');
Route::delete('api/cargos/eliminar', 'CargosController@delete');

//rutas de empleados
Route::get('api/empleados/index', 'EmpleadosController@index');
Route::get('api/empleados/getSelect', 'EmpleadosController@getSelect');
Route::post('api/empleados/guardar', 'EmpleadosController@store');
Route::put('api/empleados/actualizar', 'EmpleadosController@update');
Route::delete('api/empleados/eliminar', 'EmpleadosController@delete');

//rutas de ccompensaciones
Route::get('api/ccompensaciones/index', 'CcompensacionesController@index');
Route::get('api/ccompensaciones/getSelect', 'CcompensacionesController@getSelect');
Route::post('api/ccompensaciones/guardar', 'CcompensacionesController@store');
Route::put('api/ccompensaciones/actualizar', 'CcompensacionesController@update');
Route::delete('api/ccompensaciones/eliminar', 'CcompensacionesController@delete');

//rutas de nominas
Route::get('api/nominas/index', 'NominasController@index');
Route::get('api/nominas/getSelect', 'NominasController@getSelect');
Route::post('api/nominas/guardar', 'NominasController@store');
Route::put('api/nominas/actualizar', 'NominasController@update');
Route::delete('api/nominas/eliminar', 'NominasController@delete');

//rutas de novedades
Route::get('api/novedades/index', 'NovedadesController@index');
Route::get('api/novedades/getSelect', 'NovedadesController@getSelect');
Route::post('api/novedades/guardar', 'NovedadesController@store');
Route::put('api/novedades/actualizar', 'NovedadesController@update');
Route::delete('api/novedades/eliminar', 'NovedadesController@delete');

//rutas de pensiones
Route::get('api/pensiones/index', 'PensionesController@index');
Route::get('api/pensiones/getSelect', 'PensionesController@getSelect');
Route::post('api/pensiones/guardar', 'PensionesController@store');
Route::put('api/pensiones/actualizar', 'PensionesController@update');
Route::delete('api/pensiones/eliminar', 'PensionesController@delete');

//rutas de riesgos
Route::get('api/riesgos/index', 'RiesgosController@index');
Route::get('api/riesgos/getSelect', 'RiesgosController@getSelect');
Route::post('api/riesgos/guardar', 'RiesgosController@store');
Route::put('api/riesgos/actualizar', 'RiesgosController@update');
Route::delete('api/riesgos/eliminar', 'RiesgosController@delete');

//rutas de salud
Route::get('api/salud/index', 'SaludController@index');
Route::get('api/salud/getSelect', 'SaludController@getSelect');
Route::post('api/salud/guardar', 'SaludController@store');
Route::put('api/salud/actualizar', 'SaludController@update');
Route::delete('api/salud/eliminar', 'SaludController@delete');
