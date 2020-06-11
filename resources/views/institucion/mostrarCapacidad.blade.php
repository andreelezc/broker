@extends('layouts.app')
@section('content')
<div class="container">
      <div class="row">

        <div class="   col-md-10 col-md-offset-1" >
   
   
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Capacidades de  {{ Auth::Guard('institucion')->user()->name }}
              </h3> </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                       
                        </div>
                    @endif
              <div class="col-md-3 col-lg-2 " align="center"> 
                    {{-- <img alt="User Pic" src="{{ asset('img/avatar_2x.png') }}" class="img-circle img-responsive">  --}}
                    {{--<img  height="300" width="300" avatar="{{ Auth::Guard('institucion')->user()->name }}" class="img-responsive round" >--}}
                    <img src="/cargas/avatars/{{ Auth::Guard('institucion')->user()->avatar }}" style="width:150px; height:130px; float:left; border-radius:50%; margin-right:70px;"  class="img-responsive round" >

               
               <br>
               <br><br><br><br><br><br>
                {{--Boton de nuevo --}}
              <div class="col-md-4  col-md-offset-1">
               <a data-original-title="Editar Telefono" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"  href="{{ url('institucion/capacidad')}}" ><i class="glyphicon glyphicon-plus"></i> Agregar</a>  
           </div>
            </div>   

  {{-- LISTA DE Capacidades  --}}
 
    <div class="row">
    
        <div class="  col-sm-9 col-xs-2">
                           

 <ul class="list-group">
         @foreach(Auth::Guard('institucion')->user()->capacidades as $capacidad)
    <li class="list-group-item">
    <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
              <h4 class="list-group-item-heading">{{ $capacidad->titulo }}</h4>

                 <p>
              @foreach($capacidad->keywords as $key)
                  <a href="{{ url('/institucion/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
                      <span class="badge">{{ $key->palabra }}</span>
                  </a>
              @endforeach

              </p>

          </div>



          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
              <a href="#ventana{{ $capacidad->id }}"   class="text-center btn btn-default " data-toggle="modal" > ver más</a>
          </div>
    </div>

               <div class="modal fade in" id="ventana{{ $capacidad->id }}" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- header de la ventana-->

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title"> {{ $capacidad->titulo }}  </h4>

                                         @foreach($capacidad->keywords as $key)
                                            <a href="{{ url('/institucion/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
                                                <span class="badge">{{ $key->palabra }}</span>
                                            </a>
                                         @endforeach
                                        


                                    </div>
                                     <!-- contenido de la ventana de la ventana-->
                                            <!-- panel de capacidad-->
                                    <div class="modal-body"> 
                                    <p class="list-group-item-text">  Descripcion: {{ $capacidad->descripcion }} </p>
                                        <p></p>
                                        <ul>
                                            <li>Categoria: {{ $capacidad->categoria }}</li>
                                            <li>Experiencia:  {{ $capacidad->experiencias }}</li>
                                            <li>Orientacion: {{ $capacidad->orientacion }}</li>
 
                
                <li>  Disponibilidad Horaria: </li>  <br>

                <div class="row">
                <div class="col-md-8">
                 <div class="form-group"> 
                   <label>Fecha de inicio:  </label>  {{ $capacidad->fechaInicio }}
                   <br>
                    <label>Fecha de  finalización:  </label>  {{ $capacidad->fechaFin }}

                   <h5 ">Franja horaria Seleccionada: <label>{{ $capacidad->tiempo }}</label></h5>
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td> {{ $capacidad->horaInicioL }}</td> 
                     <td>a</td>
                     <td>{{ $capacidad->horaFinL }} </td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td> {{ $capacidad->horaInicioM }}</td> 
                     <td>a</td>
                     <td>{{ $capacidad->horaFinM }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td> {{ $capacidad->horaInicioMi }}</td> 
                     <td>a</td>
                     <td>{{ $capacidad->horaFinMi }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td> {{ $capacidad->horaInicioJ }}</td> 
                     <td>a</td>
                     <td>{{ $capacidad->horaFinJ }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td> {{ $capacidad->horaInicioV }}</td> 
                     <td>a</td>
                     <td>{{ $capacidad->horaFinV }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td> {{ $capacidad->horaInicioS }}</td> 
                     <td>a</td>
                     <td>{{ $capacidad->horaFinS}} </td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td> {{ $capacidad->horaInicioD }}</td> 
                     <td>a</td>
                     <td>{{ $capacidad->horaFinD }} </td>
                  </tr> 
                  <p></p>
                   </tbody>
                    </table>
                    
                   </div></div></div>
                                                      
         
                                <li>Remuneración Pretendida: {{ $capacidad->remuneracion }}</li>
                                        </ul>
                                        <p></p>
                                    </div>
                                            
                                     <!-- footer de la ventana-->
                              <div class="modal-footer">
                                <div class="  col-lg-offset-2" >
                                   <div class="row">
                                          <div class="col-md-1  ">
                                              <a data-original-title="Editar Capacidades" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary" href="{{ url('institucion/capacidad/editar/'.$capacidad->id) }}">Editar  <i class="glyphicon glyphicon-edit"></i>   </a>
                                          </div>
                                          {{--Boton de eliminar --}}
                                          <div class="   col-lg-offset-7" >
                                               <div class="col-md-1">
                                                <form method="post" action="{{ route('borrarCapacidad') }}">
                                                    {{ csrf_field() }}
                                                  {{ method_field('DELETE') }}
                                               
                                                  {{-- <input type="hidden" name="_method" value="delete"> --}}
                                                  <input type="hidden" name="id" value="{{  $capacidad->id }}">
                                                   <button class="btn btn-danger">Eliminar <i class="glyphicon glyphicon-trash"></i></button>
                                                 </form>

                                                       
                                                  </div>

                                {{-- end col-lg --}}
                                          </div>
                                          {{-- end col --}}
                                    </div>
                                          {{-- end row --}}

                                </div>
                              </div>
            </div>{{-- modal --}}
              </div>
          </div> {{-- modal --}} 


    </li>
  
@endforeach
                       
    </div>
</ul>

                     <div class="text-center">
                    
                   @if(Auth::Guard('institucion')->user()->capacidades->count() > 0)
                   {!!$capacidades->links()!!}
                   @endif
                    </div> 
</div>
 {{-- Fin LISTA DE Mostrar Capacidades  --}}


    
    <script src="{{ asset('js/avatar.js') }} "></script>
           
                         
                </div>
                </div>
               <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            
        </div>
         </div>
         </div> 
       </div>
@endsection