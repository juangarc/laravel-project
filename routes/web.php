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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['role:admin']], function () {
Route::resource('cargos', 'CargoController');

Route::resource('sedes', 'SedeController');

Route::resource('tipoAusentismos', 'TipoAusentismoController');

Route::resource('tipoVinculacions', 'TipoVinculacionController');
});

Route::group(['middleware' => ['role:admin|user']], function () {
Route::resource('empleados', 'EmpleadoController');
});

Route::group(['middleware' => ['role:admin|user']], function () {
Route::resource('ausentismos', 'AusentismoController');

Route::resource('prorrogas', 'ProrrogaController');
});
//Route::resource('empleados', 'EmpleadoController');

Route::get('/prueba/{id}', 'AusentismoController@showDataEmploy');

Route::get('/prueba2/{id}', 'SolicitudController@showDataEmploy');

Route::group(['middleware' => ['role:admin|user']], function () {
Route::resource('instituciones', 'InstitucionesController');

Route::resource('examenes', 'ExamenesController');

Route::resource('tipoExamens', 'TipoExamenController');

Route::resource('clientes', 'ClienteController');

Route::resource('productos', 'ProductoController');

Route::resource('cupos', 'CupoController');

Route::resource('beneficiarios', 'BeneficiarioController');

Route::resource('examenInstitucions', 'ExamenInstitucionController');
});

Route::get('chart', 'ChartController@index');

Route::group(['middleware' => ['role:admin|user']], function () {
Route::resource('estadisticas', 'EstadisticaController');
});

Route::group(['middleware' => ['role:admin|user|costumer']], function () {
Route::resource('solicituds', 'SolicitudController');
});

Route::get('prueba3/{id}', 'ExamenInstitucionController@getInstitucion');

Route::get('prueba4/{id}/{id2}', 'ExamenInstitucionController@getValor');

Route::get('/correo', 'SolicitudController@sendEmail' );


Route::resource('estadisticas', 'EstadisticaController');