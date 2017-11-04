<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/
/*
|--------------------------------------------------------------------------
| Rutas Privada Instituciones
|--------------------------------------------------------------------------

*/
Route::middleware('isInstitucion')->group(function()
{

		Route::get('institucion/home', 'InstitucionController@index');
		//Route::get('institucion/perfil', 'Institucion\PerfilController@index');
		Route::get('institucion/perfil','InstitucionController@perfil');
		Route::get('institucion/acceso','InstitucionController@acceso');
		//Route::post('institucion/perfil','InstitucionController@imag_perfil');
		//Route::get('institucion/perfil','InstitucionController@maps');

		Route::get('institucion/capacidad', 'InstitucionController@capacit');
		Route::get('institucion/mostrarCapacidad', 'InstitucionController@mostrarCapacidad');
		Route::get('institucion/buscar', 'InstitucionController@buscar');
		Route::post('institucion/capacidad', 'CapacidadController@crear');
	
		




});
/*
|--------------------------------------------------------------------------
| Rutas Privada Productors
|--------------------------------------------------------------------------

*/
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

/*
|--------------------------------------------------------------------------
| Rutas Publicas
|--------------------------------------------------------------------------

/*Vistas Institucion */
//Route::get('institucion/inicio', 'Institucion\InicioController@index');
Route::get('institucion/inicio', 'InstitucionController@inicio');
Route::get('institucion/acceso','InstitucionController@acceso');
Route::get('institucion/acceso', 'InstitucionController@showLoginForm');
Route::post('institucion/acceso', 'InstitucionController@login');

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

// showlists
Route::get('institucion/buscar/{key}/{page?}','InstitucionController@buscarPalabra');
Route::get('productor/buscar/{key}/{page?}','ProductorController@buscarPalabra');








