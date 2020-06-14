<?php

namespace inetweb\Http\Controllers;

use inetweb\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Http\Request;

use DB;
use inetweb\Oportunidad;
use inetweb\Capacidad;
use inetweb\Seleccion;
use inetweb\Postulacion;
use inetweb\OportunidadKey;
use inetweb\CapacidadKey; 
use inetweb\Institucion;
use inetweb\Productor;
use inetweb\Mail\nuevaPostulacion;
use inetweb\Mail\nuevoUsuario;


use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Mail;
use stdClass;

class InstitucionController extends Controller
{
    //

     use AuthenticatesUsers;

    public function noLogueados()
    {
      $contador_oportunidad = [];
      $contador_capacidad = [];
      $grafico = [];
      $OportunidadKey = OportunidadKey::all();
      $CapacidadKey = CapacidadKey::all();

      foreach ($OportunidadKey as $p) 
      {
        if(isset($contador_oportunidad[strtolower($p->palabra)]))
        {
          $contador_oportunidad[strtolower($p->palabra)] += 1;
        }
        else
        {
          $contador_oportunidad[strtolower($p->palabra)] = 1;
        }
      }
      foreach ($CapacidadKey as $p) 
      {
        if(isset($contador_capacidad[strtolower($p->palabra)]))
        {
          $contador_capacidad[strtolower($p->palabra)] += 1;
        }
        else
        {
          $contador_capacidad[strtolower($p->palabra)] = 1;
        }
      }
     
     arsort($contador_capacidad);
     arsort($contador_oportunidad);
    //  return $contador;
      $label = [];
      $i = 0;
    foreach ($contador_oportunidad as $key => $value) 
    {
      if($i< 10)
      {
        $label[] = strtoupper($key);
        $grafico[] = $value;

      }
      $i++;
    }

    // return $grafico;


    $Oportunidad = Oportunidad::all()->count();
    $Capacidad = Capacidad::all()->count();
    $Institucion = Institucion::all()->count();
    $Productor = Productor::all()->count();
      //contadores
      return view('inicio')->with(["Oportunidad"=>$Oportunidad,
      "Capacidad"=>$Capacidad,
      "grafico"=>$grafico,
      "label"=>$label,
      "contador_capacidad"=>$contador_capacidad,
      "contador_oportunidad"=>$contador_oportunidad,
      "Institucion"=>$Institucion,
      "Productor"=>$Productor]);
    }

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
       $user = Auth::guard('institucion')->user()->id;
      //  Auth::Guard('institucion')->user()->capacidades->paginate(10);
       $capacidades = capacidad::orderBy('id', 'desc')->paginate(10);
        return view('institucion.mostrarCapacidad',compact('capacidades'));
        //return view('institucion.mostrarCapacidad');
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
        // $oportunidades = Oportunidad::leftJoin('oportunidad_keys','oportunidads.id','=','oportunidad_keys.oportunidad_id')
        //                             ->where('oportunidad_keys.palabra','like','%'.$palabra.'%')
        //                             ->orWhere('oportunidads.titulo','like','%'.$palabra.'%')
        //                             ->orWhere('oportunidads.descripcion','like','%'.$palabra.'%')
        //                             ->orWhere('oportunidads.requisito','like','%'.$palabra.'%')
        //                             ->distinct()
        //                             ->skip($pagina * 10)
        //                             ->take(10)
        //                             ->get(['oportunidads.*']);

        $oportunidades = Oportunidad::with('keywords')->whereHas('keywords',function($q) use($palabra)
                                                      {
                                                        $q->where('palabra',$palabra);
                                                      })->orWhere('titulo','like','%'.$palabra.'%')
                                                      ->orWhere('titulo','like','%'.$palabra.'%')
                                                      ->orWhere('descripcion','like','%'.$palabra.'%')
                                                      ->orWhere('requisito','like','%'.$palabra.'%')
                                                      ->distinct()
                                                      ->skip($pagina * 10)
                                                      ->take(10)->get();
        
                // 
                // return $oportunidades;
        
        // $oportunidades = Oportunidad::orderBy('id', 'desc')->paginate(10);
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
       //Mail::to(Auth::guard('institucion')->user())->send(new nuevoUsuario());       
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
        // Mail::to($productor)->send(new nuevaPostulacion($productor));


        ///para el flashh
        return redirect(url('/institucion/buscar'))->with('postulacion','Oportunidad Laborar agregada a ');

        // Mail::to($postulacion)->send(new nuevaPostulacion($postulacion->name)); 

    

      }

      //TODO ...paginacion
      public function postulaciones()
      {
        $user =Auth::guard('institucion')->user()->id;
        $postulacion = Postulacion::where('institucion_id', $user)->orderBy('id', 'desc')->paginate(10);
        return view('institucion.postulaciones',compact('postulacion'));
          //return view('institucion.postulaciones');
      }

      public function ofertas()
      {
        $user =Auth::guard('institucion')->user();

        /////////////////////////////////////////////////////////////
        ///////////////////////TOOOOODO ESTO PODER BORRAR DESPUE
       
//         SELECT * from oportunidads WHERE id in (SELECT oportunidad_id FROM seleccions 
// where capacidad_id in (SELECT id from capacidads where institucion_id = 1))
        $ofertas = DB::select('SELECT * from oportunidads WHERE id in (SELECT oportunidad_id FROM seleccions where capacidad_id in (SELECT id from capacidads where institucion_id = ?))', [$user->id]);
       $ofertas = Oportunidad::hydrate($ofertas);
         //$ofertas = Capacidad::hydrate($ofertas);
       ////////////////////////////////////////////////////////////
       /////////////////////////////////////////////////////////////



       $selecciones = DB::select('SELECT * from seleccions where capacidad_id IN ( SELECT id from capacidads where institucion_id = ?)',[$user->id]);
        
        $selecciones = Seleccion::hydrate($selecciones);
        return view('institucion.ofertas',array('ofertas'=>$ofertas,'selecciones'=>$selecciones));
        
        // return view('institucion.ofertas');
          
      }

       public function borrar(Request $request) {
        
            
             $postulacion = Postulacion::findOrFail($request->id);
              $postulacion->delete();

              //TODO
              //que mande el borrado con exito
              //return view('institucion.mostrarCapacidad');
              return redirect(url('institucion/postulaciones'))->with('success','POSTULACIÓN ELIMINADA ');

          }

          public function actividad()
          {

            // capacidades del login
            $capacidades = Auth::guard('institucion')->user()->capacidades;
          
            $contador_key = [];
            $linea_de_tiempo = [];
            //por cada capacidad
            foreach ($capacidades as $capacidad) 
            {
              if(isset($linea_de_tiempo[date("d-m-Y",strtotime($capacidad->created_at))]))
              {

                $linea_de_tiempo[date("d-m-Y",strtotime($capacidad->created_at))] += 1;
              }
              else
              {
                $linea_de_tiempo[date("d-m-Y",strtotime($capacidad->created_at))] = 1;
              }
              // por cada key
              foreach ($capacidad->keywords as $k) 
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

      


          
            return view('institucion.actividad')
            ->with('label',$label)
            ->with('grafico',$grafico)
            ->with('label_time',$label_time)
            ->with('grafico_time',$grafico_time)
            ;
          }



}



