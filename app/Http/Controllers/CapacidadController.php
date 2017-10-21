<?php

namespace inetweb\Http\Controllers;

use Illuminate\Http\Request;
use inetweb\Capacidad;

class CapacidadController extends Controller
{
    //


     public function crear(Request $request)
     {

     	$o=new capacidad;
     	$o->titulo= $request->titulo;
     	$o->capacidad= $request->capacidad;
     	$o->propuesta= $request->propuesta;
     	$o->experiencias= $request->experiencias;
     	$o->categoria= $request->categoria;
     	$o->rubro= $request->rubro;
     	$o->disponibilidad= $request->disponibilidad;
     	$o->remuneracion= $request->remuneracion;  	
     	$o->save();

   
     }
}
