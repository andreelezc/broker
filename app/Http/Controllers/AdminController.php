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
          $user = Auth::guard('admin')->user();
        return view('administracion.home',array('user'=>$user));
  
    }


       public function acceso()
    {
        return view('administracion.login');
    }

}
