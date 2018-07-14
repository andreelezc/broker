@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>Postulaciones Laborales</h4></div>

                <div class="panel-body">
                     @if(session('success'))
                        <div class="alert alert-danger text-center" role="alert">

                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 
                            {{-- LISTA DE postulaciones flor --}}
                            <ul class="list-group">
@foreach($postu as $postulacion)
{{$postulacion->oportunidad->titulo}}
{{$postulacion->capacidad->titulo}}
@endforeach
                                @foreach ($postulaciones as $capacidad)

                                 <li class="list-group-item">
                                        <div class="row">
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                            {{-- <img class="round" src="{{$interes->oportunidad->productor->avatar}}"/> --}}
                                          <img src="/cargas/avatars/{{$capacidad->institucion->avatar}}" class="img-responsive round" >
                                          {{-- style="width:150px; height:150px; float:left; border-radius:50%; margin-right:30px;" --}}

                                          </div> 
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                                 <h4 class="list-group-item-heading">{{ $capacidad->titulo }}</h4>
                                                 <span>                  
                                                    Publicado por: {{$capacidad->institucion->name}}
                                                    </span>
                                                         <p>
                                                   @foreach($capacidad->keywords as $key)
                                                    <a href="{{ url('/productor/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
                                                   <span class="badge">{{ $key->palabra }}</span>
                                                      
                                                    </a>
                                                   @endforeach
                                                    </p>

                                            </div>
                                        
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                            <a href="#ventana{{ $capacidad->id }}"   class="text-center btn btn-default " data-toggle="modal" > ver más</a>
                                        </div>
                                        </div> <!-- boton de la ventana-->

                                                   <div class="modal fade in" id="ventana{{$capacidad->id }}" >
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
                                                                        <p class="list-group-item-text">  Descripcion: {{$capacidad->descripcion }} </p>
                                                                            <p></p>
                                                                            <ul>
                                                                                <li>Categoria: {{ $capacidad->categoria }}</li>
                                                                                <li>Experiencia:  {{ $capacidad->experiencias }}</li>
                                                                                <li>Orientacion: {{$capacidad->orientacion }}</li>
                                     
                                                    
                                                    <li>  Disponibilidad Horaria: </li>  <br>

                                                    <div class="row">
                                                    <div class="col-md-8">
                                                     <div class="form-group"> 
                                                       <label>Fecha de inicio:  </label>  {{$capacidad->fechaInicio }}
                                                       <br>
                                                        <label>Fecha de  finalización:  </label>  {{$capacidad->fechaFin }}

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
                                                         <td> {{$capacidad->horaInicioV }}</td> 
                                                         <td>a</td>
                                                         <td>{{ $capacidad->horaFinV }} </td>
                                                      </tr> 
                                                      <p></p>
                                                          <tr>         
                                                         <td><label>Sabado</label></td>
                                                         <td>de</td>
                                                         <td> {{$capacidad->horaInicioS }}</td> 
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
                                                                    <div class="  col-lg-offset-7" >
                                                                       <div class="row">
                                                                              <div class="col-md-4  ">
                                                                                <a  class="btn btn-success" type="button" href="mailto:{{ $capacidad->institucion->email }}">Contactar  <i class="glyphicon glyphicon-comment"></i> </a>
                                                                            </div>
                                                                             
                                                                        </div>
                                                                              {{-- end row --}}

                                                                    </div>
                                                                  </div>
                                                </div>{{-- modal --}}
                                                  </div>
                                              </div> {{-- modal --}} 
                                      

                                    </li>
                                                                       

                                   
                           @endforeach
                                
                            </ul>


                 </div>
            </div>
        </div>
    </div>
</div>

@endsection