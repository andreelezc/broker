<?php

namespace inetweb\Http\Controllers;

use Illuminate\Http\Request;
use inetweb\Oportunidad;
use inetweb\Keyword;
class OportunidadController extends Controller
{
    //protected function guard()

     public function crear(Request $request)
     {

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
          //$o->productor_id = $user->id; 
     	$o->save(); //guardo en la base de datos

           //por cada palabra clave creo una keyword;
          $k = new Keyword;
          $k->referencia = ($o->id);
          $k->palabra = ($request->key1);
          $k->tipo = ('oportunidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($o->id);
          $k->palabra = ($request->key2);
          $k->tipo = ('oportunidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($o->id);
          $k->palabra = ($request->key3);
          $k->tipo = ('oportunidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($o->id);
          $k->palabra = ($request->key4);
          $k->tipo = ('oportunidad');
          $k->save();
           // redireccion
          return view('productor.home');

     	
     }
     


}
