<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use inetweb\Oportunidad;
use inetweb\OportunidadKey;


use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


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

    public function nuevacapacit()
    {
        return view('institucion.nuevaCapacidad');
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


    public function perfil(){
        return view ('institucion.perfil', array('institucion'=> Auth::user()));
    }

    public function imag_perfil(Request $request){
        //Subir imagen del perfil
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/avatar/' . $filename));
            # code...
            $user = Auth::user();
            $user->avatar= $filename;
            $user->save();


        }

        return view ('institucion.perfil', array('institucion'=> Auth::user()));
        //code maps
    }

    public function maps() {
       
    }


}



