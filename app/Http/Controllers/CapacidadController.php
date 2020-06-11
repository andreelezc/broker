<?php

namespace inetweb\Http\Controllers;

use Illuminate\Http\Request;
use inetweb\Capacidad;
use inetweb\CapacidadKey;
use Illuminate\Support\Facades\Auth;
use DB;
class CapacidadController extends Controller
{
    // 
   

     public function crear(Request $request)
     {

          $user = Auth::guard('institucion')->user();
          // creo la capacidad
     	$c=new capacidad;
     	$c->titulo= $request->titulo;
     	$c->descripcion= $request->descripcion;
     	$c->experiencias= $request->experiencias;
     	$c->categoria= $request->categoria;
      $c->tipo= $request->tipo;
     
      $c->personal= $request->personal;
      $c->remuneracion= $request->remuneracion; 
      $c->provincia= $request->provincia; 
      $c->localidad= $request->localidad; 
     	$c->fechaInicio= $request->fechaInicio;
      $c->fechaFin= $request->fechaFin;
      $c->tiempo= $request->tiempo; 
          $c->horaInicioL= $request->horaInicioL;
          $c->horaFinL= $request->horaFinL;
          $c->horaInicioM= $request->horaInicioM;
          $c->horaFinM= $request->horaFinM;
          $c->horaInicioMi= $request->horaInicioMi;
          $c->horaFinMi= $request->horaFinMi;
          $c->horaInicioJ= $request->horaInicioJ;
          $c->horaFinJ= $request->horaFinJ;
          $c->horaInicioV= $request->horaInicioV;
          $c->horaFinV= $request->horaFinV;
          $c->horaInicioS= $request->horaInicioS;
          $c->horaFinS= $request->horaFinS;
          $c->horaInicioD= $request->horaInicioD;
          $c->horaFinD= $request->horaFinD;
      
     	
          $c->institucion_id = $user->id; 	
      //guardo en la base de datos
      $c->save();

          //por cada palabra clave creo una keyword;
          $c->addKey($request->key1);
          $c->addKey($request->key2);
          $c->addKey($request->key3);
          $c->addKey($request->key4);

          //redireccion a la pag de inicio
         // return view('institucion.mostrarCapacidad');
          return redirect(url('institucion/mostrarCapacidad'));

     }


     public function getAll(){
       $capacidades = capacidad::all();
         return json_encode($capacidades);
     }
      

      
      public function borrar(Request $request) {
        
            
             $capacidad = capacidad::findOrFail($request->id);
              $capacidad->delete();

              //TODO
              //que mande el borrado con exito
              //return view('institucion.mostrarCapacidad');
              return redirect(url('institucion/mostrarCapacidad'));

    
          
          }

      public function editar(Request $request, $id)
      {
        $c = capacidad::findOrFail($id);  

      $c->titulo= $request->titulo;
      $c->descripcion= $request->descripcion;
      $c->experiencias= $request->experiencias;
      $c->categoria= $request->categoria;
    //   $c->orientacion= $request->orientacion;
      $c->fechaInicio= $request->fechaInicio;
      $c->tiempo= $request->tiempo;
          $c->horaInicioL= $request->horaInicioL;
          $c->horaFinL= $request->horaFinL;
          $c->horaInicioM= $request->horaInicioM;
          $c->horaFinM= $request->horaFinM;
          $c->horaInicioMi= $request->horaInicioMi;
          $c->horaFinMi= $request->horaFinMi;
          $c->horaInicioJ= $request->horaInicioJ;
          $c->horaFinJ= $request->horaFinJ;
          $c->horaInicioV= $request->horaInicioV;
          $c->horaFinV= $request->horaFinV;
          $c->horaInicioS= $request->horaInicioS;
          $c->horaFinS= $request->horaFinS;
          $c->horaInicioD= $request->horaInicioD;
          $c->horaFinD= $request->horaFinD;
      $c->fechaFin= $request->fechaFin;
      $c->remuneracion= $request->remuneracion; 

      $c->save();

     // return view("institucion.mostrarCapacidad");
      return redirect(url('institucion/mostrarCapacidad'));
   
      }

       public function capacidad()
    {
         $capacidad = capacidad::orderBy('id')->paginate(1);//->take(10)->get();
        
        return view('capacidad',array('capacidad'=>$capacidad));
       
    }
 
     
}
