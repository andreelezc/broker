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
		//Route::post('institucion/perfil','InstitucionController@imag_perfil');
		//Route::get('institucion/perfil','InstitucionController@maps');

		Route::get('institucion/capacidad', 'InstitucionController@cargarCapacidad');
		Route::get('institucion/mostrarCapacidad', 'InstitucionController@mostrarCapacidad');
		Route::get('institucion/buscar', 'InstitucionController@buscar');
		Route::post('institucion/capacidad', 'CapacidadController@crear');
	
		

		Route::delete('institucion/capacidad','CapacidadController@borrar')->name("borrarCapacidad");

		Route::get('institucion/capacidad/editar/{id}','InstitucionController@editarCapacidad');
		Route::put('institucion/capacidad/editar/{id}','CapacidadController@editar');



});
/*
|--------------------------------------------------------------------------
| Rutas Privada Productors
|--------------------------------------------------------------------------

*/
Route::middleware('isProductor')->group(function(){
///rutas solo accesibles por usuarios autenticados de tipo productor

		Route::get('productor/home', 'ProductorController@index');
		Route::get('productor/perfil', 'ProductorController@perfil');
		Route::get('productor/oportunidad', 'ProductorController@oportunidad');
		Route::get('productor/mostrarOportunidad', 'ProductorController@mostrarOportunidad');
		Route::get('productor/buscar', 'ProductorController@buscar');
		Route::post('productor/oportunidad', 'OportunidadController@crear');

		Route::delete('productor/oportunidad','OportunidadController@borrar')->name("borrarOportunidad");

		Route::get('productor/oportunidad/editar/{id}','ProductorController@editarOportunidad');
		Route::put('productor/oportunidad/editar/{id}','OportunidadController@editar');
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
Route::get('productor/inicio', 'ProductorController@inicio');
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




Route::get("superlogout",function(){
	Session::flush();
});

