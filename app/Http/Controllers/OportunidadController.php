<?php

namespace inetweb\Http\Controllers;

use Illuminate\Http\Request;
use inetweb\Oportunidad;

class OportunidadController extends Controller
{
    //protected function guard()

     public function crear(Request $request)
     {

     	$o=new oportunidad;
     	$o->titulo= $request->titulo;
     	$o->necesidad= $request->necesidad;
     	$o->propuesta= $request->propuesta;
     	$o->requisito= $request->requisito;
     	$o->categoria= $request->categoria;
     	$o->rubro= $request->rubro;
     	$o->disponibilidad= $request->disponibilidad;
     	$o->remuneracion= $request->remuneracion;
     	$o->fechaIngreso= $request->fechaIngreso;
     	$o->fechaEgreso= $request->fechaEgreso;
     	$o->save();

          return view('productor.home');

     	
     }
     


}
