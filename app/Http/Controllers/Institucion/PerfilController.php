<?php

namespace inetweb\Http\Controllers\Institucion;

use Illuminate\Http\Request;
use inetweb\Http\Controllers\Controller;

class PerfilController extends Controller
{
    //
    public function index()
    {
        return view('institucion.perfil');
    }

}
