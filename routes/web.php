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

Route::resource('sedes', 'SedeController');

Route::resource('tipoAusentismos', 'TipoAusentismoController');

Route::resource('tipoEspecialidads', 'TipoEspecialidadController');

Route::resource('tipoExamens', 'TipoExamenController');

Route::resource('tipoVinculacions', 'TipoVinculacionController');

Route::group(['middleware' => ['role:admin']], function () {
Route::resource('empleados', 'EmpleadoController');
});
Route::resource('ausentismos', 'AusentismoController');

Route::resource('prorrogas', 'ProrrogaController');

//Route::resource('empleados', 'EmpleadoController');

Route::get('/prueba/{id}', 'AusentismoController@showDataEmploy');

Route::get('/prueba2/{id}', 'SolicitudController@showDataEmploy');

Route::resource('instituciones', 'InstitucionesController');

Route::resource('examenes', 'ExamenesController');

Route::resource('cargos', 'CargoController');

Route::resource('clientes', 'ClienteController');

Route::resource('productos', 'ProductoController');

Route::resource('cupos', 'CupoController');

Route::resource('beneficiarios', 'BeneficiarioController');

Route::resource('examenInstitucions', 'ExamenInstitucionController');

Route::get('chart', 'ChartController@index');

Route::resource('estadisticas', 'EstadisticaController');

Route::resource('solicituds', 'SolicitudController');

Route::get('prueba3/{id}', 'ExamenInstitucionController@getInstitucion');

Route::get('prueba4/{id, $id2}', 'ExamenInstitucionController@getValor');