<?php

namespace inetweb\Http\Controllers\Productor;

use Illuminate\Http\Request;
use inetweb\Http\Controllers\Controller;

class AccesoController extends Controller
{
    //

     public function index()
    {
        return view('productor.acceso');
    }
}
