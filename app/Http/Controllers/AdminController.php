<?php

namespace inetweb\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use inetweb\Institucion;
use inetweb\Productor;
use Mail;
class AdminController extends Controller
{
    //
        use AuthenticatesUsers;
        
   public function showLoginForm()
    {
        return view('administracion.login');
    }

    
     protected function guard()
     {
     	return Auth::guard('admin');
     }

     
     public function authenticated()
     {
     	return redirect(url('admin'));
     }

   
      public function index()
    {
        //   $user = Auth::guard('admin')->user();
        // return view('administracion.home',array('user'=>$user));

        $productores = Productor::orderBy('estado','asc')->get();
        // ->where('estado','=',0);//estado  = false
        $instituciones = Institucion::get();
        // ->where('estado','=',0);//estado  = false
          return view('administracion.home',array('productores'=>$productores,'instituciones'=>$instituciones,));
  
    }

       public function acceso()
    {
        return view('administracion.login');
    }

    public function activar($tipo,$user){
        if($tipo == 'productor')
        {
            $u = Productor::findOrFail($user);
              
        }
        else
        {
            $u = Institucion::findOrFail($user);
        }
        $u->estado = 1;
        $u->save();

       return back()->with('activado','Usuario '.$u->name .' activado');

    }
    public function suspender($tipo,$user){
        if($tipo == 'productor')
        {
            $u = Productor::findOrFail($user);
              
        }
        else
        {
            $u = Institucion::findOrFail($user);
        }
        $u->estado = 0;
        $u->save();
return back()->with('suspendido','Usuario '.$u->name .' suspendido');;
      

    }


}
