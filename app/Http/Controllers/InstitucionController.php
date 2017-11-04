<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use inetweb\Oportunidad;
use inetweb\Capacidad;
use inetweb\OportunidadKey;


use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Mail;
use inetweb\Mail\nuevoUsuario;

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

    public function cargarCapacidad()
    {
        return view('institucion.capacidad');
    }

     public function editarCapacidad($id)
    {
        $capacidad = capacidad::findOrFail($id);
        return view('institucion.editarCapacidad',array("capacidad"=>$capacidad));
    }

     public function perfil()
    {
         Mail::to(Auth::guard('institucion')->user())->send(new nuevoUsuario());       
        return view('institucion.perfil');
    }


    public function mostrarCapacidad()
    {
        return view('institucion.mostrarCapacidad');
    }

    public function inicio()
    {
        
        return view('institucion.inicio');
    }

     public function acceso()
    {
        return view('institucion.acceso');
    }

     public function buscar()
    {
        ///envio los resultados a la vista
        $oportunidades = Oportunidad::orderBy('id', 'desc')->take(10)->get();
        return view('institucion.buscar',array('oportunidades'=>$oportunidades));
    }

    //TODO 
    public function buscarPalabra($palabra,$pagina = 0)
    {
        // SELECT * FROM `oportunidads` LEFT JOIN oportunidad_keys on oportunidads.id = oportunidad_keys.oportunidad_id where oportunidad_keys.palabra LIKE '%full%'
        ///buscar las capacidades que tengan la keyword o en su contenidos
        $oportunidades = Oportunidad::leftJoin('oportunidad_keys','oportunidads.id','=','oportunidad_keys.oportunidad_id')
                                    ->where('oportunidad_keys.palabra','like','%'.$palabra.'%')
                                    ->orWhere('oportunidads.titulo','like','%'.$palabra.'%')
                                    ->orWhere('oportunidads.propuesta','like','%'.$palabra.'%')
                                    ->distinct()
                                    ->skip($pagina * 10)
                                    ->take(10)
                                    ->get(['oportunidads.*']);
                // 
                                    return view('institucion.buscar',array('oportunidades'=>$oportunidades));
    }


   


}



