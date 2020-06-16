<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use DB;
use inetweb\Oportunidad;
use inetweb\Seleccion;
use inetweb\Capacidad;
use inetweb\Institucion;
use inetweb\Productor;
use inetweb\Postulacion;
use Intervention\Image\Facades\Image;
use Mail;
use inetweb\Mail\nuevaSeleccion;
use inetweb\Mail\nuevoUsuario;


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
        $user = Auth::guard('productor')->user();
        return view('productor.home',array('user'=>$user));
       //return view('productor.home');
    }

    public function perfil()
    {
        return view('productor.perfil');
    }
    public function inicio()
    {
        return view('productor.inicio');
    }
    public function productor()
    {
         $productor = productor::orderBy('id')->paginate(10);
        //$productor = productor::orderBy('id');//->take(10)->get();
        return view('productor',array('productor'=>$productor));
       
    }

     public function acceso()
    {
        return view('productor.acceso');
    }

     public function oportunidad()
    {
        return view('productor.oportunidad');
    }
    public function mostrarOportunidad()
    {
        $user =Auth::guard('productor')->user()->id;
        $oportunidades = oportunidad::orderBy('id', 'desc')->paginate(10);
        return view('productor.mostrarOportunidad',compact('oportunidades'));
      
       //$oportunidades = Oportunidad::orderBy('id', 'desc')->paginate(1);
        //return view('productor.mostrarOportunidad');
    }

    public function editarOportunidad($id)
    {
        $oportunidades = oportunidad::findOrFail($id);
        return view('productor.editarOportunidad',array("oportunidad"=>$oportunidades));
    }

     public function buscar()
    {
        ///buscar 10 capacidades y mostrar
        $capacidades = capacidad::orderBy('id', 'desc')->paginate(10);
        // return $capacidades->Institucion;
        //envio los resultados a la vista
        return view('productor.buscar',array('capacidades'=>$capacidades));
    }



    //TODO 
    public function buscarPalabra($palabra,$pagina = 0)
    {
        // SELECT * FROM `oportunidads` LEFT JOIN oportunidad_keys on oportunidads.id = oportunidad_keys.oportunidad_id where oportunidad_keys.palabra LIKE '%full%'
        ///buscar las capacidades que tengan la keyword o en su contenidos
       $capacidades = Capacidad::leftJoin('capacidad_keys','capacidads.id','=','capacidad_keys.capacidad_id')
                                    ->where('capacidad_keys.palabra','like','%'.$palabra.'%')
                                    ->orWhere('capacidads.titulo','like','%'.$palabra.'%')
                                    ->orWhere('capacidads.descripcion','like','%'.$palabra.'%')
                                    ->orWhere('capacidads.experiencias','like','%'.$palabra.'%')                       
                                    ->distinct()
                                    // ->skip($pagina * 10)
                                    // ->take(10)
                                    ->paginate(10);
                // 
                                    return view('productor.buscar',array('capacidades'=>$capacidades));
    }




      public function postular(Request $request)
      {

        $postulacion = new Seleccion;
        $postulacion->productor_id = $request->productor_id;//si esta alreves pero fue sin querer
        $postulacion->capacidad_id = $request->capacidad_id;
        $postulacion->oportunidad_id = $request->oportunidad_id;
        $postulacion->save();

        $institucion =institucion::findOrFail($request);
       

          // Mail::to($institucion)->send(new nuevaSeleccion($institucion));
        ///para el flashh
        return redirect(url('/productor/buscar'))->with('seleccion','Capacidad Laboral agregada a ');

      }


     


      public function update_avatar(Request $request){

      // Handle the user upload of avatar
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/cargas/avatars/'.$filename ) );

        $user =Auth::guard('productor')->user();
        $user->avatar = $filename;
        $user->save();
      }

      return redirect(url('productor/perfil'));

    }

    public function editarPerfil(Request $request)
      {
        $user =Productor::findOrFail($request->id);  

        $user->name= $request->name;
        $user->direccion= $request->direccion;
        $user->cp= $request->cp;
        $user->provincia= $request->provincia;
        $user->localidad= $request->localidad;
        $user->telefono= $request->telefono;
        $user->descripcion= $request->descripcion;

        $user->save();

       // return view("institucion.mostrarCapacidad");
        return redirect(url('productor/perfil'))->with('success','Tus datos fueron actualizados con éxito.');
   
      }
      public function eliminarPerfil(Request $request) {

          $user =Productor::findOrFail($request->id);
          $user->delete();

          return redirect(url('/'))->with('status','Tu cuenta ha sido ELIMINADA');

      }

       public function selecciones(){
        $user =Auth::guard('productor')->user()->id;
        $seleccion = Seleccion::where('productor_id', $user)->orderBy('id', 'desc')->paginate(10);
        return view('productor.selecciones',compact('seleccion'));
        //return view('productor.selecciones');
      }

      public function postulaciones(){
        

        $user =Auth::guard('productor')->user();
        // SELECT * from capacidads WHERE capacidads.id in (SELECT postulacions.capacidad_id FROM postulacions 
        //where oportunidad_id in (SELECT oportunidads.id from oportunidads where oportunidads.productor_id = 1))
        $postulaciones = DB::select('SELECT * from capacidads WHERE capacidads.id in (SELECT postulacions.capacidad_id FROM postulacions where oportunidad_id in (SELECT oportunidads.id from oportunidads where oportunidads.productor_id = ?))', [$user->id]);
         $postulaciones = Capacidad::hydrate($postulaciones);

        


       $postu = DB::select('SELECT * from postulacions where oportunidad_id IN ( SELECT id from oportunidads where productor_id = ?)',[$user->id]);
        
        $postu = Postulacion::hydrate($postu);

        return view('productor.postulaciones',array('postulaciones'=>$postulaciones,'postu'=>$postu));
    

      }

      

       public function borrar(Request $request) {
        
            
             $seleccion = Seleccion::findOrFail($request->id);
              $seleccion->delete();

              //TODO
              //que mande el borrado con exito
              //return view('institucion.mostrarCapacidad');
              return redirect(url('productor/selecciones'))->with('success','SELECCIÓN ELIMINADA ');

    
          
          }


          public function actividad()
          {

            // capacidades del login
            $oportunidades = Auth::guard('productor')->user()->oportunidades;
          
            $contador_key = [];
            $linea_de_tiempo = [];
            //por cada capacidad
            foreach ($oportunidades as $oportunidad) 
            {
              if(isset($linea_de_tiempo[date("d-m-Y",strtotime($oportunidad->created_at))]))
              {

                $linea_de_tiempo[date("d-m-Y",strtotime($oportunidad->created_at))] += 1;
              }
              else
              {
                $linea_de_tiempo[date("d-m-Y",strtotime($oportunidad->created_at))] = 1;
              }
              // por cada key
              foreach ($oportunidad->keywords as $k) 
              {
                if(isset($contador_key[strtolower($k->palabra)]))
                {
                  $contador_key[strtolower($k->palabra)] += 1;
                }
                else
                {
                  $contador_key[strtolower($k->palabra)] = 1;
                }
              }
            }

      //para el grafico
      arsort($contador_key);
      //  return $contador;
        $label = [];
        $i = 0;
      foreach ($contador_key as $key => $value) 
      {
        if($i< 10)
        {
          $label[] = strtoupper($key);
          $grafico[] = $value;
  
        }
        $i++;
      }

       // linea de tiempo
       foreach ($linea_de_tiempo as $key => $value) 
       {
        
           $label_time[] = $key;
           $grafico_time[] = $value;
   
       
         
       }


       $user =Auth::guard('productor')->user();
       // SELECT * from capacidads WHERE capacidads.id in (SELECT postulacions.capacidad_id FROM postulacions 
       //where oportunidad_id in (SELECT oportunidads.id from oportunidads where oportunidads.productor_id = 1))
       $postulaciones = DB::select('SELECT * from capacidads WHERE capacidads.id in (SELECT postulacions.capacidad_id FROM postulacions where oportunidad_id in (SELECT oportunidads.id from oportunidads where oportunidads.productor_id = ?))', [$user->id]);
        $postulaciones = Capacidad::hydrate($postulaciones);


          
            return view('productor.actividad')
            ->with('label',$label)
            ->with('grafico',$grafico)
            ->with('label_time',$label_time)
            ->with('grafico_time',$grafico_time)
            ->with('postulaciones', $postulaciones->count());
            ;
          }

}
