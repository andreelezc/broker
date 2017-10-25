@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buscar Capacidades Laborales</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                       
                        </div>
                    @endif


<div class="form-group">
    <label for="search-input" class="control-label">Buscar</label>
    <div class="input-group">
        <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
        <input type="search" name="search-input" class="form-control" id="search-input" />
    </div>
</div>
 
 {{-- LISTA DE OPORTUNIDADES --}}
<ul class="list-group">
   
@foreach( $capacidades as $capacidad)

    <li class="list-group-item">
        <div class="row">
            <div class="col-md-4">
                <h4 class="list-group-item-heading">{{ $capacidad->titulo }}</h4>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <span>                  
                Publicado por: {{ $capacidad->institucion->name }}
                </span>

            </div>       
        </div>

    <p></p>        
        <p class="list-group-item-text"> Experiencias: {{ $capacidad->experiencias }} </p>
        <p></p>
          <!-- boton de la ventana-->
        <div  class=" col-md-offset-10">  
             <a href="#ventana1"   class="text-center btn btn-default " data-toggle="modal" > ver mas</a>
        </div>  
                        <div class="modal fade in" id="ventana1" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- header de la ventana-->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title"> {{ $capacidad->titulo }} </h4>

                                    </div>
                                     <!-- contenido de la ventana de la ventana-->
                                            <!-- panel de capacidad-->
                                    <div class="modal-body"> 
                                    <p class="list-group-item-text"> Experiencia:  {{ $capacidad->experiencias }}</p>
                                        <p></p>
                                        <ul>
                                            <li>Categoria: {{ $capacidad->categoria }}</li>
                                            <li>Rubro: {{ $capacidad->rubro }}</li>
                                            <li>Disponibilidad: {{ $capacidad->disponibilidad }}</li>
                                            <li>Remuneracion Pretendida: {{ $capacidad->remuneracion }}</li>
                                        </ul>
                                        <p></p>
                                    </div>
                                            <!-- panel de contacto-->
                                    <div class="modal-body">     
                                    <p class="list-group-item-text"> Contacto:  {{ $capacidad->institucion->name }}</p>
                                        <p></p>
                                        <ul>
                                            <li>Correo Electronico : {{ $capacidad->institucion->email }}</li>
                                            <li>Direccion: {{ $capacidad->institucion->direccion }}</li>
                                            <li>Telefono: {{ $capacidad->institucion->telefono  }}</li>

                                           
                                        </ul> 
           
                                         <p  href="" class="text-center btn">Ver Perfil </p>
                                          <p></p>

                                    </div>
                                     <!-- footer de la ventana-->
                                    <div class="modal-footer">
                                        <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
                                         <!--<button class="btn btn-primary" type="button">Save</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>

    </li>
@endforeach
</ul>

                 </div>
            </div>
        </div>
    </div>
</div>
@endsection