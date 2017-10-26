<?php

namespace inetweb\Http\Controllers;

use Illuminate\Http\Request;
use inetweb\Capacidad;
use inetweb\CapacidadKey;
use Illuminate\Support\Facades\Auth;
class CapacidadController extends Controller
{
    //


     public function crear(Request $request)
     {

          $user = Auth::guard('institucion')->user();
          // creo la capacidad
     	$c=new capacidad;
     	$c->titulo= $request->titulo;
     	$c->propuesta= $request->propuesta;
     	$c->experiencias= $request->experiencias;
     	$c->categoria= $request->categoria;
     	$c->rubro= $request->rubro;
     	$c->disponibilidad= $request->disponibilidad;
     	$c->remuneracion= $request->remuneracion; 
          $c->institucion_id = $user->id; 	
     	$c->save(); //guardo en la base de datos

          //por cada palabra clave creo una keyword;
          $c->addKey($request->key1);
          $c->addKey($request->key2);
          $c->addKey($request->key3);
          $c->addKey($request->key4);

          //redireccion a la pag de inicio
          return view('institucion.home');
     }


     public function getAll(){
          $capacidades = capacidad::all();
          return json_encode($capacidades);
     }
}
