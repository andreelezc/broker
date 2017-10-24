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


Route::middleware('isInstitucion')->group(function(){
///rutas solo accesibles por usuarios autenticados de tipo institucion
Route::get('institucion/home', 'InstitucionController@index');
Route::get('institucion/perfil', 'Institucion\PerfilController@index');
Route::get('institucion/capacidad', 'InstitucionController@capacit');
Route::get('institucion/buscar', 'InstitucionController@buscar');
Route::post('institucion/capacidad', 'CapacidadController@crear');



});

Route::middleware('isProductor')->group(function(){
///rutas solo accesibles por usuarios autenticados de tipo productor

Route::get('productor/home', 'ProductorController@index');
Route::get('productor/perfil', 'Productor\PerfilController@index');
Route::get('productor/oportunidad', 'ProductorController@oport');
Route::get('productor/buscar', 'ProductorController@buscar');
Route::post('productor/oportunidad', 'OportunidadController@crear');

});



///no logueados
Route::get('/', function () {
    return view('inicio');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');




/*Vistas Institucion */
Route::get('institucion/inicio', 'Institucion\InicioController@index');
 // Acceso Routes...
Route::get('institucion/acceso', 'InstitucionController@showLoginForm');
Route::post('institucion/acceso', 'InstitucionController@login');

  // Registro Routes...
Route::get('institucion/registro', 'Institucion\RegistroController@showRegistrationForm');
Route::post('institucion/registro', 'Institucion\RegistroController@register');




/*Vistas Productor */
Route::get('productor/inicio', 'Productor\InicioController@index');
 // Acceso Routes...
Route::get('productor/acceso', 'ProductorController@showLoginForm');
Route::post('productor/acceso', 'ProductorController@login');
// Registro Routes..
Route::get('productor/registro', 'Productor\RegistroController@showRegistrationForm');
Route::post('productor/registro', 'Productor\RegistroController@register');

////////////////////API para consultas * sin vistas

Route::get('capacidad/buscar/{key}', 'CapacidadController@buscar');
Route::get('capacidad/all', 'CapacidadController@getAll');


/*
Route::get('productor/inicio', 'Productor\InicioController@index');
Route::get('productor/acceso', 'Productor\AccesoController@index');*/







