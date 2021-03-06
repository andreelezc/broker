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

use inetweb\Http\Controllers\InstitucionController;
use inetweb\Institucion;

Route::group(['middleware'=>['isInstitucion','InstitucionActivada']],function()
{

		Route::get('institucion/home', 'InstitucionController@index');
		
		Route::get('institucion/perfil','InstitucionController@perfil');	
		Route::post('institucion/perfil', 'InstitucionController@update_avatar');
		Route::put('institucion/perfil','InstitucionController@editarPerfil');	
		Route::delete('institucion/perfil','InstitucionController@eliminarPerfil')->name("eliminarInstitucion");
		
		Route::get('institucion/capacidad', 'InstitucionController@cargarCapacidad');
		Route::get('institucion/mostrarCapacidad', 'InstitucionController@mostrarCapacidad');
		Route::get('institucion/buscar', 'InstitucionController@buscar');//anda
		Route::post('institucion/capacidad', 'CapacidadController@crear');
		Route::delete('institucion/capacidad','CapacidadController@borrar')->name("borrarCapacidad");

		Route::get('institucion/capacidad/editar/{id}','InstitucionController@editarCapacidad');
		Route::post('institucion/capacidad/{id}','CapacidadController@editar')->name('capacidad.editar');


		///Postulacion
		Route::post('institucion/postular','InstitucionController@postular')->name('postularInstitucion');
		///vista postulaciones
		Route::get('institucion/postulaciones','InstitucionController@postulaciones')->name('postulacionesInstitucion');
		Route::delete('institucion/postulaciones','InstitucionController@borrar')->name("borrarPostulacion");

		Route::get('institucion/ofertas','InstitucionController@ofertas')->name('ofertasInstitucion');


		Route::get('institucion/actividad','InstitucionController@actividad')->name('institucion.actividad');

		Route::get('institucion/buscar/{key}/{page?}','InstitucionController@buscarPalabra')->name('buscar.key.institucion');

});
/*
|--------------------------------------------------------------------------
| Rutas Privada Productors
|--------------------------------------------------------------------------

*/
Route::group(['middleware'=>['isProductor','ProductorActivada']],function()
{
///rutas solo accesibles por usuarios autenticados de tipo productor
		Route::get('productor/buscar/{key}/{page?}','ProductorController@buscarPalabra')->name('buscar.key.productor');;

		Route::get('productor/home', 'ProductorController@index');
		Route::get('productor/perfil', 'ProductorController@perfil');
		Route::delete('productor/perfil','ProductorController@eliminarPerfil')->name("eliminarPerfil");
		Route::put('productor/perfil','ProductorController@editarPerfil');	
		Route::post('productor/perfil', 'ProductorController@update_avatar');
		
		Route::get('productor/oportunidad', 'ProductorController@oportunidad');
		Route::get('productor/mostrarOportunidad', 'ProductorController@mostrarOportunidad');
		Route::get('productor/buscar', 'ProductorController@buscar');
		Route::post('productor/oportunidad', 'OportunidadController@crear');

		Route::delete('productor/oportunidad','OportunidadController@borrar')->name("borrarOportunidad");

		Route::get('productor/oportunidad/editar/{id}','ProductorController@editarOportunidad');
		Route::put('productor/oportunidad/editar/{id}','OportunidadController@editar');

		Route::get('productor/actividad','ProductorController@actividad')->name('productor.actividad');


		///Seleccionar
		Route::post('productor/postular','ProductorController@postular')->name('postularProductor');

		//selecciones
		Route::get('productor/selecciones','ProductorController@selecciones')->name('seleccionesProductor');
		Route::post('productor/selecciones/borrar','ProductorController@borrar')->name("borrarSeleccion");

		Route::get('productor/postulaciones','ProductorController@postulaciones')->name('postulacionesProductor');

});
/*
|--------------------------------------------------------------------------
| Rutas Privada Administración
|--------------------------------------------------------------------------
*/
Route::middleware('isAdmin')->group(function(){
	Route::get('admin','AdminController@index');

	////activar y desactivar usuarios

	Route::get('admin/activar/{tipo}/{user}','AdminController@activar');
	Route::get('admin/suspender/{tipo}/{user}','AdminController@suspender');
	
});


///no logueados
Route::get('/',"InstitucionController@noLogueados")->name('home');

Route::get('institucion', 'InstitucionController@institucion');

Auth::routes();

/*
|--------------------------------------------------------------------------
| Rutas Publicas
|--------------------------------------------------------------------------

/*Vistas Institucion */
//Route::get('institucion/inicio', 'Institucion\InicioController@index');
Route::get('institucion/inicio', 'InstitucionController@inicio');

Route::get('institucion/acceso','InstitucionController@acceso');
// Route::get('institucion/acceso', 'InstitucionController@showLoginForm');
Route::post('institucion/acceso', 'InstitucionController@login');

Route::get('institucion/registro', 'Institucion\RegistroController@showRegistrationForm');
Route::post('institucion/registro', 'Institucion\RegistroController@register');



/*Vistas Productor */
Route::get('productor/inicio', 'ProductorController@inicio');

Route::get('productor/acceso','ProductorController@acceso');
 // Acceso Routes...
Route::get('productor/acceso', 'ProductorController@showLoginForm');
Route::post('productor/acceso', 'ProductorController@login');
// Registro Routes..
Route::get('productor/registro', 'Productor\RegistroController@showRegistrationForm');
Route::post('productor/registro', 'Productor\RegistroController@register');


// ACCESSO ADMINITRACION
Route::get('admin/login', 'AdminController@showLoginForm');
Route::get('admin/login', 'AdminController@acceso');
Route::post('admin/login', 'AdminController@login');
Route::get('admin/registro', 'Admin\RegistroController@showRegistrationForm');
Route::post('admin/registro', 'Admin\RegistroController@register');
////////////////////API para consultas * sin vistas

// Route::get('capacidad/buscar/{key}', 'CapacidadController@buscar');
// Route::get('capacidad/all', 'CapacidadController@getAll');


//BORRE ESTO PORQUE ERAN VISTAS PUBLICAR QUE NO VAMOS USAR MAS


Route::get("superlogout",function(){
	Session::flush();
});


Route::group(['middleware' => ['auth']], function () {

// showlists



});
