<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('productor.buscar');
    }
}
