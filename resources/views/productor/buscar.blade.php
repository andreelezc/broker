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
                        @if (session('seleccion'))
                        <div class="alert alert-success">
                            {{ session('seleccion') }}
                       
                            <a href="{{ route('seleccionesProductor') }}">Mis Selecciones</a>
                        </div>
                    @endif

{{-- FORMULARIO DE BUSQUEDA --}}
<div class="form-group">
    <label for="search-input" class="control-label">Buscar</label>
    <div class="input-group">
        <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
        <input type="search" name="search-input" class="form-control" id="search-input" placeholder="Ingresar busqueda + enter" />
    </div>
</div>
 

 {{-- LISTA DE CAPACIDADES LABORALES --}}
<ul class="list-group"> 
@foreach( $capacidades as $capacidad)

{{-- Item Capacidad --}}
    <li class="list-group-item">
    {{-- Fila Capacidad --}}
    <div class="row">
        {{--   avatar  --}}
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
            <img src="/cargas/avatars/{{$capacidad->institucion->avatar}}" class="img-responsive round" >
        </div> 
        {{-- informacion capacidad --}}
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
                {{-- titulo --}}
                <h4 class="list-group-item-heading">{{ $capacidad->titulo }}</h4>
                    {{-- nombre de la institución --}}
                    <span>                  
                        Publicado por: {{$capacidad->institucion->name}}
                    </span>
                    {{-- lista de palabras clave de la capacidad--}}
                    <p>
                        @foreach($capacidad->keywords as $key)
                        {{-- link palabra calve --}}
                            <a href="{{ url('/productor/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
                            <span class="badge">{{ $key->palabra }}</span>
                            </a>
                        @endforeach
                    </p>
            </div>
        {{-- fin informacion capacidad--}}

        {{-- Boton para PopPup Modal --}}
        <div class="col-md-2">
            <a href="#ventana{{ $capacidad->id }}"   class="text-center btn btn-default " data-toggle="modal" >
                ver más
            </a>
        </div>
        {{-- //FIN Boton para PopPup Modal --}}
    </div>
    {{-- Fila Capacidad row--}}
       
        
         {{--  --}}
         {{--  --}}
         {{-- INICIO MODAL POPUP --}}
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
                            
                            <div class="row">
                                <div class="col-md-12" >
                                    <div class="col-md-4  ">
                                        <a  class="btn btn-success" type="button" href="mailto:{{ $capacidad->institucion->email }}">Contactar  <i class="glyphicon glyphicon-comment"></i> </a>
                                    </div>
                                    
                                    <div class="col-md-4">
                                         <a href="#selectOportunidad"
                                                            user_id="{{ Auth::Guard('productor')->user()->id}}"  
                                                            capacidad_id="{{  $capacidad->id }}" 
                                                            
                                                            class="text-center btn btn-default botonSeleccion" data-toggle="modal" data-dismiss="modal" >
                                                            Seleccionar
                                                            <span class="glyphicon glyphicon-hand-up"></span>
                                                         </a>
                                                         {{--  Este boton manda user_id y capacidad_id al modal de la capacidad  --}}

                                    
                                     </div>
                            
                           
                                    <div class="col-md-4">
                                         <a class="btn btn-danger" type="button" data-dismiss="modal">Cerrar  <i class="glyphicon glyphicon-remove"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                    </div>{{-- /modal FOOTER  --}}
                </div>
            </div>
        </div>
        {{-- FIN MODAL POPUP --}}
    </li>
    {{-- FIN item Capacidad --}}
@endforeach
</ul>
                      {{-- paginaciones --}} 
                    <div class="text-center">
                      {{--  {!!$capacidades->links()!!}  --}}
                    </div>

{{-- MODAL DE SELECCION DE OPORTUNIDAD --}}
                              <div class="modal fade in" id="selectOportunidad" >
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        {{--  <!-header de la ventana->  --}}
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                            </button>
                                                            <h4 class="modal-title"> Seleccione la Oportunidad ofrecida asociada a la Capacidad seleccionada</h4>
                                                        </div>
                                                        {{--   contenido de la ventana de la ventana  --}}
                                                        {{--   panel de capacidad  --}}
                                                        <div class="modal-body"> 
                                                            <div class="row">
                                                                <div class="col-mod-8 col-offset-2">
                                                                         <form id="formularioSeleccion" method="POST" action="{{url('productor/postular')}}" >
                                                                                 {{ csrf_field() }} 
                                                                    <div class="formgroup">
                                                                        <input type="hidden" name="capacidad_id" id="id_capacidad">
                                                                        <input type="hidden" name="productor_id" id="id_productor">
                                                                        <select class="form-control" id="oportunidad_id" name="oportunidad_id">
                                                                            @foreach (Auth::Guard('productor')->user()->oportunidades as $item)
                                                                            <option value="{{$item->id}}">{{$item->id." - ".$item->titulo}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        
                                                                    </div>
                                                                         </form>
                                                                </div>
                                                            </div>

                                                        </div>{{--  fin modal body  --}}
                                                        <!-- footer de la ventana-->

                                                        <div class="modal-footer">
                                                           <a class="btn btn-default btn-primary" id="enviarSeleccion">Seleccionar
                                                                    <span class="glyphicon glyphicon-hand-up"></span>
                                                           </a>
                                                        </div>{{-- fin modal footer   --}}
                                                    </div>
                                                </div>

                                            </div>






{{--FIN MODAL DE SELECCION DE OPORTUNIDAD --}}






                 </div>
            </div>
        </div>
    </div>
</div>
    <script src="{{ asset('js/avatar.js') }} "></script>
 <script src="{{ asset('js/jquery.min.js') }} "></script>
 <script type="text/javascript">
     $(document).ready(function(){
         //Buscar por palabra clave
        $("#search-input").keydown(function(e){
            if(e.which == 13)
            {
                var buscarurl = "{{ url('/productor/buscar/')}}";
               location.href = buscarurl+"/"+$(this).val();
            }
        })
        $("#buscar").click(function(e){
           
            var buscarurl = "{{ url('/productor/buscar/')}}";
            location.href = buscarurl+"/"+$("#search-input").val();
            
        })

          //Para la Seleccion
        $(".botonSeleccion").click(function(){

            var capacidad = $(this).attr('capacidad_id')
            var user_id = $(this).attr('user_id')
            //cambiar le valor de la capacidad la formulario
            $("#id_capacidad").val(capacidad);
            $("#id_productor").val(user_id);

        })

        $("#enviarSeleccion").click(function(){
            $("#formularioSeleccion").submit();
        })







     })
 </script>
@endsection