<?php

namespace inet\Http\Controllers;

use Illuminate\Http\Request;

class RegisemprenController extends Controller
{
    //

     public function showRegistrationForm()
    {
        return view('regisempren');
    }
}
