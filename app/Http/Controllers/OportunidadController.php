<?php

namespace inetweb\Http\Controllers;
use Illuminate\Http\Request;
use inetweb\Oportunidad;
use inetweb\OportunidadKey;
use Illuminate\Support\Facades\Auth;
class OportunidadController extends Controller
{
    //protected function guard()

     public function crear(Request $request)
     {

            $user = Auth::guard('productor')->user();

     	$o=new oportunidad;
     	$o->titulo= $request->titulo;
     	$o->descripcion= $request->descripcion;
     	$o->requisito= $request->requisito;
      $o->personal= $request->personal;
      $o->remuneracion= $request->remuneracion;
      $o->provincia= $request->provincia;
      $o->localidad= $request->localidad;
     	$o->fechaInicio= $request->fechaInicio;
      $o->fechaFin= $request->fechaFin;
      $o->tiempo= $request->tiempo;
          $o->horaInicioL= $request->horaInicioL;
          $o->horaFinL= $request->horaFinL;
          $o->horaInicioM= $request->horaInicioM;
          $o->horaFinM= $request->horaFinM;
          $o->horaInicioMi= $request->horaInicioMi;
          $o->horaFinMi= $request->horaFinMi;
          $o->horaInicioJ= $request->horaInicioJ;
          $o->horaFinJ= $request->horaFinJ;
          $o->horaInicioV= $request->horaInicioV;
          $o->horaFinV= $request->horaFinV;
          $o->horaInicioS= $request->horaInicioS;
          $o->horaFinS= $request->horaFinS;
          $o->horaInicioD= $request->horaInicioD;
          $o->horaFinD= $request->horaFinD;
     	$o->numdura= $request->numdura;   
     	$o->duracion= $request->duracion;
      $o->productor_id = $user->id; 

     	$o->save(); //guardo en la base de datos

           //por cada palabra clave creo una keyword;
          $o->addKey($request->key1);
          $o->addKey($request->key2);
          $o->addKey($request->key3);
          $o->addKey($request->key4);
           // redireccion
         // return view('productor.mostrarOportunidad');
          return redirect(url('productor/mostrarOportunidad'));

     	
     }

     
    public function borrar(Request $request) {
  
      
       $oportunidad = oportunidad::findOrFail($request->id);
        $oportunidad->delete();

        //TODO boton borrar
        //que mande el borrado con exito
        //return view('productor.mostrarOportunidad');
        return redirect(url('productor/mostrarOportunidad'));


    }

    public function editar(Request $request, $id)
      {
        $o = oportunidad::findOrFail($id);
      $o->titulo= $request->titulo;
      $o->descripcion= $request->descripcion;
      $o->requisito= $request->requisito;
      $o->fechaInicio= $request->fechaInicio;
      $o->tiempo= $request->tiempo;
          $o->horaInicioL= $request->horaInicioL;
          $o->horaFinL= $request->horaFinL;
          $o->horaInicioM= $request->horaInicioM;
          $o->horaFinM= $request->horaFinM;
          $o->horaInicioMi= $request->horaInicioMi;
          $o->horaFinMi= $request->horaFinMi;
          $o->horaInicioJ= $request->horaInicioJ;
          $o->horaFinJ= $request->horaFinJ;
          $o->horaInicioV= $request->horaInicioV;
          $o->horaFinV= $request->horaFinV;
          $o->horaInicioS= $request->horaInicioS;
          $o->horaFinS= $request->horaFinS;
          $o->horaInicioD= $request->horaInicioD;
          $o->horaFinD= $request->horaFinD;
      $o->numdura= $request->numdura;
     
      $o->duracion= $request->duracion;
        $o->remuneracion= $request->remuneracion;
      $o->save();

      //return view("productor.mostrarOportunidad");
      return redirect(url('productor/mostrarOportunidad'));

      }
      public function oportunidad()
    {
         $oportunidad = oportunidad::orderBy('id')->paginate(1);//->take(10)->get();
        return view('oportunidad',array('oportunidad'=>$oportunidad));
        
    }
     


}
