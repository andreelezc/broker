<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use inetweb\Oportunidad;


use Illuminate\Support\Facades\Auth;

class InstitucionController extends Controller
{
    //

     use AuthenticatesUsers;

     public function showLoginForm()
    {
        
        return view('institucion.acceso');
    }


   
    //protected $loginview = 'institucion.acceso';


     public function authenticated()
     {
     	return redirect(url('institucion/home'));
     }


     protected function guard()
     {
     	return Auth::guard('institucion');
     }

     public function index()
    {
        $user = Auth::guard('institucion')->user();
        return view('institucion.home',array('user'=>$user));
    }

    public function capacit()
    {
        return view('institucion.capacidad');
    }

     public function buscar()
    {
        ///primero obtener una lista de 10 ultimas ofertas obtenidas
        //TODO: oportunidades recomendadas segun usuario
        // $oportunidad = Oportunidad::all();

       

        ///envio los resultados a la vista
        
        return view('institucion.buscar');
    }

}



