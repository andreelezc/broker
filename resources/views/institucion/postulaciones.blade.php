@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mis Postulaciones</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                       
                        </div>
                    @endif

                     
               


{{-- LISTA DE OPORTUNIDADES flor --}}
<ul class="list-group">
    @foreach(Auth::Guard('institucion')->user()->postulaciones as $interes)
    
	
   <li class="list-group-item">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
      	{{-- <img class="round" src="{{$interes->oportunidad->productor->avatar}}"/> --}}
	  <img src="/cargas/avatars/{{$interes->oportunidad->productor->avatar}}" class="img-responsive round" >
	  {{-- style="width:150px; height:150px; float:left; border-radius:50%; margin-right:30px;" --}}

      </div> 
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
             <h4 class="list-group-item-heading">{{ $interes->oportunidad->titulo }}</h4>
             <span>                  
                Publicado por: {{$interes->oportunidad->productor->name}}
                </span>
                     <p>
               @foreach($interes->oportunidad->keywords as $key)
                <a href="{{ url('/institucion/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
               <span class="badge">{{ $key->palabra }}</span>
                  
                </a>
               @endforeach
                </p>

        </div>
    
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
        <a href="#ventana{{ $interes->oportunidad->id }}"   class="text-center btn btn-default " data-toggle="modal" > ver más</a>
    </div>
    </div>
       
        <div class="modal fade in" id="ventana{{ $interes->oportunidad->id }}" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- header de la ventana-->

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title"> {{ $interes->oportunidad->titulo }} </h4>

                                    </div>
                                     <!-- contenido de la ventana de la ventana-->
                                            <!-- panel de capacidad-->
                                    <div class="modal-body"> 
                                    <p class="list-group-item-text"> Descripción:  {{$interes->oportunidad->descripcion }}</p>
                                        <p></p>
                                        <ul>
                                            <li>Requisitos: {{ $interes->oportunidad->requisito }}</li>
                                            <li>  Disponibilidad Horaria: </li>  <br>

                <div class="row">
                <div class="col-md-8">
                 <div class="form-group"> 
                   <label>Fecha de inicio:  </label>  {{ $interes->oportunidad->fechaInicio }}
                   <h5 class="text-center">Franja horaria Seleccionada: <label>{{ $interes->oportunidad->tiempo }}</label></h5>
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td> {{ $interes->oportunidad->horaInicioL }}</td> 
                     <td>a</td>
                     <td>{{ $interes->oportunidad->horaFinL }} </td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td> {{ $interes->oportunidad->horaInicioM }}</td> 
                     <td>a</td>
                     <td>{{ $interes->oportunidad->horaFinM }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td> {{ $interes->oportunidad->horaInicioMi }}</td> 
                     <td>a</td>
                     <td>{{ $interes->oportunidad->horaFinMi }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td> {{ $interes->oportunidad->horaInicioJ }}</td> 
                     <td>a</td>
                     <td>{{ $interes->oportunidad->horaFinJ }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td> {{ $interes->oportunidad->horaInicioV }}</td> 
                     <td>a</td>
                     <td>{{ $interes->oportunidad->horaFinV }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td> {{ $interes->oportunidad->horaInicioS }}</td> 
                     <td>a</td>
                     <td>{{ $interes->oportunidad->horaFinS}} </td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td> {{ $interes->oportunidad->horaInicioD }}</td> 
                     <td>a</td>
                     <td>{{ $interes->oportunidad->horaFinD }} </td>
                  </tr>
                  <p></p>
                   </tbody>
                    </table>
                     <label>Fecha de  finalización:  </label>  {{ $interes->oportunidad->fechaFin }}
                   </div></div></div>
                                                      
         
                        <li>Remuneración : {{ $interes->oportunidad->remuneracion }}</li>

        
                       <li> Duración: {{ $interes->oportunidad->numdura }} {{ $interes->oportunidad->duracion }} </li> 
                        
                        
                                        </ul>
                                        <p></p>
                                    </div>
                                            
                                     <!-- footer de la ventana-->
                                    <div class="modal-footer">
                                        <div class="  col-lg-offset-2" >


                                            <div class="row">
                        
                        {{--Boton de eliminar postulacion--}}
                        <div class="   col-lg-offset-7" >
                         <div class="col-md-1">
                          <form method="post" action="{{ route('borrarPostulacion') }}">
                              {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                         
                            {{-- <input type="hidden" name="_method" value="delete"> --}}
                            <input type="hidden" name="id" value="{{  $interes->oportunidad->id }}">
                             <button class="btn btn-default">Eliminar <i class="glyphicon glyphicon-trash"></i></button>
                           </form>

                                 
                            </div>

                                {{-- end col-lg --}}
                         </div>
                        {{-- end col --}}
                        </div>
                        {{-- end row --}}
               

                    </div>
                </div>
            </div>
        </div>
    </div>
 
       
          <!-- boton de la ventana-->
        
         
                  

</li>
    @endforeach
</ul>



                 </div>
            </div>
        </div>
    </div>
</div>

@endsection