@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>Ofertas Laborales </h4></div>

                <div class="panel-body">
                     @if(session('success'))
                        <div class="alert alert-danger text-center" role="alert">

                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 

                      {{-- LISTA DE Ofertas flor --}}
                      <ul class="list-group">
                          @foreach ($ofertas as $oportunidad)
                                   

                                    <li class="list-group-item">
                                            <div class="row">
                                              
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                                     <h4 class="list-group-item-heading">{{ $oportunidad->titulo }}</h4>  
                                                    {{--  <span>                  
                                                        Publicado por: {{$interes->oportunidad->productor->name}}
                                                        </span>
                                                             <p>
                                                       @foreach($interes->oportunidad->keywords as $key)
                                                        <a href="{{ url('/institucion/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
                                                       <span class="badge">{{ $key->palabra }}</span>
                                                          
                                                        </a>
                                                       @endforeach
                                                        </p> --}}

                                                </div>
                                            
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                <a href="#ventana{{ $oportunidad->id }}"   class="text-center btn btn-default " data-toggle="modal" > ver más</a>
                                            </div>
                                            </div>
                                               
                                                <div class="modal fade in" id="ventana{{ $oportunidad->id }}" >
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <!-- header de la ventana-->

                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                                </button>
                                                                                <h4 class="modal-title"> {{ $oportunidad->titulo }} </h4>

                                                                            </div>
                                                                             <!-- contenido de la ventana de la ventana-->
                                                                                    <!-- panel de capacidad-->
                                                                            <div class="modal-body"> 
                                                                            <p class="list-group-item-text"> Descripción:  {{$oportunidad->descripcion }}</p>
                                                                                <p></p>
                                                                                <ul>
                                                                                    <li>Requisitos: {{ $oportunidad->requisito }}</li>
                                                                                    <li>  Disponibilidad Horaria: </li>  <br>

                                                        <div class="row">
                                                        <div class="col-md-8">
                                                         <div class="form-group"> 
                                                           <label>Fecha de inicio:  </label>  {{ $oportunidad->fechaInicio }}
                                                           <h5 class="text-center">Franja horaria Seleccionada: <label>{{ $oportunidad->tiempo }}</label></h5>
                                                         <table class="table table-user-information">   
                                                          <tbody> 
                                                          <tr>         
                                                             <td><label>Lunes</label></td>
                                                             <td>de</td>
                                                             <td> {{ $oportunidad->horaInicioL }}</td> 
                                                             <td>a</td>
                                                             <td>{{ $oportunidad->horaFinL }} </td>
                                                          </tr> 
                                                          <p></p>
                                                           <tr>         
                                                             <td><label>Martes</label></td>
                                                             <td>de</td>
                                                             <td> {{ $oportunidad->horaInicioM }}</td> 
                                                             <td>a</td>
                                                             <td>{{ $oportunidad->horaFinM }} </td>
                                                          </tr> 
                                                          <p></p>
                                                              <tr>         
                                                             <td><label>Miercoles</label></td>
                                                             <td>de</td>
                                                             <td> {{ $oportunidad->horaInicioMi }}</td> 
                                                             <td>a</td>
                                                             <td>{{ $oportunidad->horaFinMi }} </td>
                                                          </tr> 
                                                          <p></p>
                                                              <tr>         
                                                             <td><label>Jueves</label></td>
                                                             <td>de</td>
                                                             <td> {{ $oportunidad->horaInicioJ }}</td> 
                                                             <td>a</td>
                                                             <td>{{ $oportunidad->horaFinJ }} </td>
                                                          </tr> 
                                                          <p></p>
                                                              <tr>         
                                                             <td><label>Viernes</label></td>
                                                             <td>de</td>
                                                             <td> {{ $oportunidad->horaInicioV }}</td> 
                                                             <td>a</td>
                                                             <td>{{ $oportunidad->horaFinV }} </td>
                                                          </tr> 
                                                          <p></p>
                                                              <tr>         
                                                             <td><label>Sabado</label></td>
                                                             <td>de</td>
                                                             <td> {{ $oportunidad->horaInicioS }}</td> 
                                                             <td>a</td>
                                                             <td>{{ $oportunidad->horaFinS}} </td>
                                                          </tr> 
                                                          <p></p>
                                                             <tr>         
                                                             <td><label>Domingo</label></td>
                                                             <td>de</td>
                                                             <td> {{ $oportunidad->horaInicioD }}</td> 
                                                             <td>a</td>
                                                             <td>{{ $oportunidad->horaFinD }} </td>
                                                          </tr>
                                                          <p></p>
                                                           </tbody>
                                                            </table>
                                                             <label>Fecha de  finalización:  </label>  {{ $oportunidad->fechaFin }}
                                                           </div></div></div>
                                                                                              
                                                 
                                                                <li>Remuneración : {{ $oportunidad->remuneracion }}</li>

                                                
                                                               <li> Duración: {{ $oportunidad->numdura }} {{ $oportunidad->duracion }} </li> 
                                                                
                                                                
                                                                                </ul>
                                                                                <p></p>
                                                                            </div>
                                                                                    
                                                                             <!-- footer de la ventana-->
                                                                            <div class="modal-footer">
                                                                                <div class="  col-lg-offset-2" >


                                                                                    
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