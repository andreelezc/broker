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
        <input type="search" name="search-input" class="form-control" id="search-input" placeholder="Ingresar busqueda + enter" />
    </div>
</div>
 

 {{-- LISTA DE capacidades --}}
<ul class="list-group"> 
@foreach( $capacidades as $capacidad)


    <li class="list-group-item">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><img class="round" avatar="{{$capacidad->institucion->name}}"/>


      </div> 
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
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
        <a href="#ventana{{ $capacidad->id }}"   class="text-center btn btn-default " data-toggle="modal" > ver mas</a>
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
                                         <div class="modal-footer">
                                      <a  class="btn btn-success" type="button" href="mailto:{{ $capacidad->institucion->email }}">Contactar  <i class="glyphicon glyphicon-comment"></i> </a>
                                      

                                      {{-- FORMULARIO DE POSTULACIÒN --}}
                                      <form method="POST" action="{{url('productor/postular')}}" >
                                          {{ csrf_field() }}
                                         <input type="hidden" name="productor_id" value="{{ Auth::Guard('productor')->user()->id}}"> 
                                         <input type="hidden" name="capacidad_id" value="{{  $capacidad->id }}"> 
                                        <button class="btn btn-primary" type="submit">
                                          Seleccionar
                                              <span class="glyphicon glyphicon-hand-up"></span>
                                        </button>
                                             
                                    </form>  
                                      <button class="btn btn-danger" type="button" data-dismiss="modal">Cerrar  <i class="glyphicon glyphicon-remove"></i></button>
                                         
                                          </div>
                                        
                                         

                                    </div>{{-- /modal FOOTER  --}}
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
<script src="{{ asset('js/avatar.js') }} "></script>
 <script src="{{ asset('js/jquery.min.js') }} "></script>
 <script type="text/javascript">
     $(document).ready(function(){
        $("#search-input").keydown(function(e){
            if(e.which == 13)
            {
                var buscarurl = "{{ url('/productor/buscar/')}}";
               location.href = buscarurl+"/"+$(this).val();
            }
        })
     })
 </script>
@endsection