<?php

namespace inetweb\Http\Controllers\Institucion;

use Illuminate\Http\Request;
use inetweb\Http\Controllers\Controller;

class InicioController extends Controller
{
    //

  public function index()
    {
        return view('institucion.inicio');
    }

}
