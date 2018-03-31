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

      public function index()
    {
        return view('administracion.home');
    }

         public function login()
    {
        return view('adminstracion.login');
    }

}
