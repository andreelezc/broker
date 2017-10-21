<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;



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
        return view('institucion.home');
    }

    public function capacit()
    {
        return view('institucion.capacidad');
    }

     public function buscar()
    {
        return view('institucion.buscar');
    }


   
}



