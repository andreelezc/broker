<?php

namespace inetweb\Http\Controllers\Institucion;
use inetweb\Institucion;
use inetweb\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use inetweb\Mail\nuevoUsuario;
class RegistroController extends Controller
{
    //
    use RegistersUsers;
    public function index()
    {
        return view('institucion.registro');
    }

     public function showRegistrationForm()
    {
        return view('institucion.registro');
    }


     protected $redirectTo = 'institucion/acceso';

      public function __construct()
    {
        $this->middleware('guest');
    }




    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:institucions',
            'direccion' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);


    }

   
    protected function create(array $data)
    {
        $institucion =  Institucion::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'direccion' => $data['direccion'],
            'password' => bcrypt($data['password']),
        ]);
        
        ///manda mail
        Mail::to($institucion)->send(new nuevoUsuario()); 

        return $institucion;

    }
     
}
