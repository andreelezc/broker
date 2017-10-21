<?php

namespace inetweb\Http\Controllers;

use Illuminate\Http\Request;
use inetweb\Capacidad;
use inetweb\Keyword;

class CapacidadController extends Controller
{
    //


     public function crear(Request $request)
     {

          // creo la capacidad
     	$c=new capacidad;
     	$c->titulo= $request->titulo;
     	
     	$c->propuesta= $request->propuesta;
     	$c->experiencias= $request->experiencias;
     	$c->categoria= $request->categoria;
     	$c->rubro= $request->rubro;
     	$c->disponibilidad= $request->disponibilidad;
     	$c->remuneracion= $request->remuneracion;  	
     	$c->save(); //guardo en la base de datos

          //por cada palabra clave creo una keyword;
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra = ($request->key1);
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra = ($request->key2);
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra = ($request->key3);
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra = ($request->key4);
          $k->tipo = ('capacidad');
          $k->save();

          // redireccion




     }
}
