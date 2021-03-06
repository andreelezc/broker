<?php

namespace inetweb\Http\Controllers\Productor;
use inetweb\Productor;

use inetweb\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use inetweb\Mail\nuevoUsuarioProductor;
use Session;

class RegistroController extends Controller
{
    //
   use RegistersUsers;

    public function index()
    {
        return view('productor.registro');
    }

    public function showRegistrationForm()
    {
        return view('productor.registro');
    }

    protected $redirectTo = 'productor/acceso';

    /*  public function __construct()
    {
        $this->middleware('guest');
    }*/

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:productors',
            'cuil' => 'required|string|max:255|unique:productors',
            'direccion' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

   
    protected function create(array $data)
    {
        $productor = Productor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'direccion' => $data['direccion'],
            'cuil' => $data['cuil'],
            'url' => $data['url'],
            'name1' => $data['name1'],
            'telefono1' => $data['telefono1'],
            'email1' => $data['email1'],
            'hora' => $data['hora'],
            'password' => bcrypt($data['password']),
        ]);

         ///manda mail
        // Mail::to($productor)->send(new nuevoUsuarioProductor($productor->name)); 

        //mensaje flash
       Session::flash('registro', 'Tu usuario ha sido registrado con éxito. El administrador del sitio evaluará tu solicitud y realizará el alta definitiva. Te avisaremos con un correo electrónico.');

        return $productor;
    }


}
