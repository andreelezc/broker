<?php

namespace inetweb\Http\Controllers\Admin;
use inetweb\Admin;

use inetweb\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
// use inetweb\Mail\nuevoUsuarioProductor;
use Session;

class RegistroController extends Controller
{
    //
   use RegistersUsers;

    public function index()
    {
        return view('administracion.registro');
    }

    public function showRegistrationForm()
    {
        return view('administracion.registro');
    }

    protected $redirectTo = 'admin/login';

    /*  public function __construct()
    {
        $this->middleware('guest');
    }*/

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            // 'direccion' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

   
    protected function create(array $data)
    {
        $productor = Productor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            // 'direccion' => $data['direccion'],
            'password' => bcrypt($data['password']),
        ]);

        //  ///manda mail
        // Mail::to($productor)->send(new nuevoUsuarioProductor($productor->name)); 

        return $productor;
    }


}
