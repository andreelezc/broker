@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mis Selecciones</div>

                <div class="panel-body">
                     @if(session('success'))
                        <div class="alert alert-danger text-center" role="alert">

                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 



{{-- LISTA DE OPORTUNIDADES flor --}}
<ul class="list-group">
    @foreach(Auth::Guard('productor')->user()->selecciones as $interes)
	
   <li class="list-group-item">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
      	{{-- <img class="round" src="{{$interes->oportunidad->productor->avatar}}"/> --}}
	  <img src="/cargas/avatars/{{$interes->capacidad->institucion->avatar}}" class="img-responsive round" >
	  {{-- style="width:150px; height:150px; float:left; border-radius:50%; margin-right:30px;" --}}

      </div> 
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
             <h4 class="list-group-item-heading">{{ $interes->capacidad->titulo }}</h4>
             <span>                  
                Publicado por la Institución: {{$interes->capacidad->institucion->name}}
                </span>
                     <p>
               @foreach($interes->capacidad->keywords as $key)
                <a href="{{ url('/productor/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
               <span class="badge">{{ $key->palabra }}</span>
                  
                </a>
               @endforeach
                </p>

        </div>
    
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
        <a href="#ventana{{ $interes->capacidad->id }}"   class="text-center btn btn-default " data-toggle="modal" > ver más</a>
    </div>
    </div> <!-- boton de la ventana-->

               <div class="modal fade in" id="ventana{{$interes->capacidad->id }}" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- header de la ventana-->

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title"> {{ $interes->capacidad->titulo }}  </h4>

                                         @foreach($interes->capacidad->keywords as $key)
                                            <a href="{{ url('/institucion/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
                                                <span class="badge">{{ $key->palabra }}</span>
                                            </a>
                                         @endforeach
                                        


                                    </div>
                                     <!-- contenido de la ventana de la ventana-->
                                            <!-- panel de capacidad-->
                                    <div class="modal-body"> 
                                    <p class="list-group-item-text">  Descripcion: {{$interes->capacidad->descripcion }} </p>
                                        <p></p>
                                        <ul>
                                            <li>Categoria: {{ $interes->capacidad->categoria }}</li>
                                            <li>Experiencia:  {{ $interes->capacidad->experiencias }}</li>
                                            <li>Orientacion: {{$interes->capacidad->orientacion }}</li>
 
                
                <li>  Disponibilidad Horaria: </li>  <br>

                <div class="row">
                <div class="col-md-8">
                 <div class="form-group"> 
                   <label>Fecha de inicio:  </label>  {{$interes->capacidad->fechaInicio }}
                   <br>
                    <label>Fecha de  finalización:  </label>  {{$interes->capacidad->fechaFin }}

                   <h5 ">Franja horaria Seleccionada: <label>{{ $interes->capacidad->tiempo }}</label></h5>
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td> {{ $interes->capacidad->horaInicioL }}</td> 
                     <td>a</td>
                     <td>{{ $interes->capacidad->horaFinL }} </td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td> {{ $interes->capacidad->horaInicioM }}</td> 
                     <td>a</td>
                     <td>{{ $interes->capacidad->horaFinM }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td> {{ $interes->capacidad->horaInicioMi }}</td> 
                     <td>a</td>
                     <td>{{ $interes->capacidad->horaFinMi }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td> {{ $interes->capacidad->horaInicioJ }}</td> 
                     <td>a</td>
                     <td>{{ $interes->capacidad->horaFinJ }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td> {{$interes->capacidad->horaInicioV }}</td> 
                     <td>a</td>
                     <td>{{ $interes->capacidad->horaFinV }} </td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td> {{$interes->capacidad->horaInicioS }}</td> 
                     <td>a</td>
                     <td>{{ $interes->capacidad->horaFinS}} </td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td> {{ $interes->capacidad->horaInicioD }}</td> 
                     <td>a</td>
                     <td>{{ $interes->capacidad->horaFinD }} </td>
                  </tr> 
                  <p></p>
                   </tbody>
                    </table>
                    
                   </div></div></div>
                                                      
         
                                <li>Remuneración Pretendida: {{ $interes->capacidad->remuneracion }}</li>
                                        </ul>
                                        <p></p>
                                    </div>
                                            
                                     <!-- footer de la ventana-->
                              <div class="modal-footer">
                                <div class="  col-lg-offset-2" >
                                   <div class="row">
                                          
                                          {{--Boton de eliminar --}}
                                          <div class="   col-lg-offset-7" >
                                               <div class="col-md-1">
                                                <form method="post" action="{{ route('borrarSeleccion') }}">
                                                    {{ csrf_field() }}
                                                  {{ method_field('DELETE') }}
                                               
                                                  {{-- <input type="hidden" name="_method" value="delete"> --}}
                                                  <input type="hidden" name="id" value="{{  $interes->capacidad->id }}">
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
</ul>
                  {{-- paginaciones --}} 
                     <div class="text-center">
                    
                      {!!$seleccion->links()!!}
                    </div> 


                 </div>
            </div>
        </div>
    </div>
</div>

@endsection