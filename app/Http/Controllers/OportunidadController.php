<?php

namespace inetweb\Http\Controllers;

use Illuminate\Http\Request;
use inetweb\Oportunidad;
use inetweb\Keyword;
use Illuminate\Support\Facades\Auth;
class OportunidadController extends Controller
{
    //protected function guard()

     public function crear(Request $request)
     {

            $user = Auth::guard('productor')->user();

     	$o=new oportunidad;
     	$o->titulo= $request->titulo;
     	$o->propuesta= $request->propuesta;
     	$o->requisito= $request->requisito;
     	$o->categoria= $request->categoria;
     	$o->rubro= $request->rubro;
     	$o->disponibilidad= $request->disponibilidad;
     	$o->remuneracion= $request->remuneracion;
     	$o->fechaIngreso= $request->fechaIngreso;
     	$o->fechaEgreso= $request->fechaEgreso;
          $o->productor_id = $user->id; 
     	$o->save(); //guardo en la base de datos

           //por cada palabra clave creo una keyword;
          $c->addKey($request->key1);
          $c->addKey($request->key2);
          $c->addKey($request->key3);
          $c->addKey($request->key4);
           // redireccion
          return view('productor.home');

     	
     }
     


}
