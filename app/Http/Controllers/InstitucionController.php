<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Http\Request;

use inetweb\Oportunidad;
use inetweb\Capacidad;
use inetweb\OportunidadKey;
use inetweb\Institucion;
use inetweb\Productor;
use inetweb\Mail\nuevaPostulacion;
use inetweb\Mail\nuevoUsuario;
use inetweb\Postulacion;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Mail;




class InstitucionController extends Controller
{
    //

     use AuthenticatesUsers;

     public function showLoginForm()
    {
        
        return view('institucion.acceso');
    }

     public function authenticated()
     {
     	return redirect(url('institucion/home'));
     }


     protected function guard()
     {
     	return Auth::guard('institucion');
     }

     public function index()
    {
        $user = Auth::guard('institucion')->user();
        return view('institucion.home',array('user'=>$user));
    }

    public function cargarCapacidad()
    {
        return view('institucion.capacidad');
    }

     public function editarCapacidad($id)
    {
        $capacidad = capacidad::findOrFail($id);
        return view('institucion.editarCapacidad',array("capacidad"=>$capacidad));
    }

    public function mostrarCapacidad()
    {
       
        return view('institucion.mostrarCapacidad');
    }

    public function inicio()
    {
        
        return view('institucion.inicio');
    }

    //TODO ...paginacion
    public function institucion()
    {
        $institucion = institucion::orderBy('id')->paginate(10);
        return view('institucion',array('institucion'=>$institucion));
        
    }

     public function acceso()
    {
        return view('institucion.acceso');
    }

    
     


    //TODO ...paginacion
     public function buscar()
    {
        ///envio los resultados a la vista
        $oportunidades = Oportunidad::orderBy('id', 'desc')->paginate(10);
        return view('institucion.buscar',array('oportunidades'=>$oportunidades));
       
      }
    //TODO 
    public function buscarPalabra($palabra,$pagina = 0)
    {
        // SELECT * FROM `oportunidads` LEFT JOIN oportunidad_keys on oportunidads.id = oportunidad_keys.oportunidad_id where oportunidad_keys.palabra LIKE '%full%'
        ///buscar las capacidades que tengan la keyword o en su contenidos
        $oportunidades = Oportunidad::leftJoin('oportunidad_keys','oportunidads.id','=','oportunidad_keys.oportunidad_id')
                                    ->where('oportunidad_keys.palabra','like','%'.$palabra.'%')
                                    ->orWhere('oportunidads.titulo','like','%'.$palabra.'%')
                                    ->orWhere('oportunidads.descripcion','like','%'.$palabra.'%')
                                    ->orWhere('oportunidads.requisito','like','%'.$palabra.'%')
                                    ->orWhere('oportunidads.lugar','like','%'.$palabra.'%')
                                    ->orWhere('oportunidads.orientacion','like','%'.$palabra.'%')
                                    ->distinct()
                                    ->skip($pagina * 10)
                                    ->paginate(10)
                                    ->get(['oportunidads.*']);
                // 
                                    return view('institucion.buscar',array('oportunidades'=>$oportunidades));

    }


     
public function update_avatar(Request $request){

      // Handle the user upload of avatar
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/cargas/avatars/'.$filename ) );

        $user =Auth::guard('institucion')->user();
        $user->avatar = $filename;
        $user->save();
      }

      return redirect(url('institucion/perfil'));

    }


      public function perfil()
    {
      // Mail::to(Auth::guard('institucion')->user())->send(new nuevoUsuario());       
        return view('institucion.perfil' );
    }



    public function editarPerfil(Request $request)
      {
        $user =Institucion::findOrFail($request->id);  
        //datos de la institución
        $user->name= $request->name;
        $user->direccion= $request->direccion;
        $user->cp= $request->cp;
        $user->provincia= $request->provincia;
        $user->localidad= $request->localidad;
        $user->telefono= $request->telefono;
        $user->descripcion= $request->descripcion;
        //info de contacto
        $user->name1= $request->name1;
        $user->telefono1= $request->telefono1;
        $user->hora= $request->hora;

        $user->save();

       // return view("institucion.mostrarCapacidad");
        return redirect(url('institucion/perfil'))->with('success','Tus datos fueron actualizados con exitos');
   
      }

      public function eliminarPerfil(Request $request) {

          $user =Institucion::findOrFail($request->id);
          $user->delete();

          return redirect(url('/'))->with('status','Tu cuenta a sido ELIMINADA');

      }

      public function postular(Request $request)
      {

        $postulacion = new Postulacion;
        $postulacion->institucion_id = $request->id_institucion;//si esta alreves pero fue sin querer
        $postulacion->oportunidad_id = $request->id_oportunidad;
        $postulacion->capacidad_id = $request->id_capacidad;
        $postulacion->save();

        //Manda mails al que se postulo
        
        $productor =Productor::findOrFail($request);
         // Mail::to(Auth::guard('institucion')->user())->send(new nuevaPostulacion($productor));
        //Mail::to($productor)->send(new nuevaPostulacion($productor));


        ///para el flashh
        return redirect(url('/institucion/buscar'))->with('postulacion','Oportunidad Laborar agregada a ');
      

      }

      //TODO ...paginacion
      public function postulaciones()
      {
        $postulacion = Postulacion::orderBy('id', 'desc')->paginate(1);
        return view('institucion.postulaciones',array('postulacion'=>$postulacion));
          //return view('institucion.postulaciones');
      }

       public function borrar(Request $request) {
        
            
             $postulacion = Postulacion::findOrFail($request->id);
              $postulacion->delete();

              //TODO
              //que mande el borrado con exito
              //return view('institucion.mostrarCapacidad');
              return redirect(url('institucion/postulaciones'))->with('success','POSTULACIÓN ELIMINADA ');

          }



}



