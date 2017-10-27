<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use inetweb\Capacidad;
use inetweb\Institucion;

class ProductorController extends Controller
{
    //
     use AuthenticatesUsers;

     
      public function showLoginForm()
    {
        return view('productor.acceso');
    }

    // protected $loginview = 'productor.acceso';


     public function authenticated()
     {
     	return redirect(url('productor/home'));
     }


     protected function guard()
     {
     	return Auth::guard('productor');
     }

      public function index()
    {
        return view('productor.home');
    }

     public function oport()
    {
        return view('productor.oportunidad');
    }

     public function buscar()
    {
        ///buscar 10 capacidades y mostrar
        $capacidades = capacidad::orderBy('id', 'desc')->take(10)->get();
        // return $capacidades->Institucion;
        //envio los resultados a la vista
        return view('productor.buscar',array('capacidades'=>$capacidades));
    }



    //TODO 
    public function buscarPalabra($palabra,$pagina = 0)
    {
        // SELECT * FROM `oportunidads` LEFT JOIN oportunidad_keys on oportunidads.id = oportunidad_keys.oportunidad_id where oportunidad_keys.palabra LIKE '%full%'
        ///buscar las capacidades que tengan la keyword o en su contenidos
       $capacidades = Capacidad::leftJoin('capacidad_keys','capacidads.id','=','capacidad_keys.capacidad_id')
                                    ->where('capacidad_keys.palabra','like','%'.$palabra.'%')
                                    ->skip($pagina * 10)
                                    ->take(10)
                                    ->get(['capacidads.*']);
                // 
                                    return view('productor.buscar',array('capacidades'=>$capacidades));
    }
}
