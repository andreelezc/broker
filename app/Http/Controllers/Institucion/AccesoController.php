<?php

namespace inetweb\Http\Controllers\Institucion;

use Illuminate\Http\Request;
use inetweb\Http\Controllers\Controller;

class AccesoController extends Controller
{
    //

    
     public function index()
    {
        return view('institucion.acceso');
    }
}
