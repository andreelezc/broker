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
                    <img  height="300" width="300" avatar="{{ Auth::Guard('institucion')->user()->name }}" class="img-responsive round" >
                    

               
               <br>
                {{--Boton de nuevo --}}
              <div class="col-md-4  col-md-offset-1">
               <a data-original-title="Editar Telefono" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"  href="{{ url('institucion/capacidad')}}" ><i class="glyphicon glyphicon-plus"></i> Agregar</a>  
           </div>
            </div>
            



  {{-- LISTA DE Capacidades  --}}
 


    <div class="row">
    
        <div class="  col-sm-9 col-xs-2">
                           

         @foreach(Auth::Guard('institucion')->user()->capacidades as $capacidad)
 <ul class="list-group">
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
                            <input type="hidden" name="id" value="{{ $capacidad->id }}">
                             <button class="btn btn-default">Eliminar</button>


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
    </div>

    </li>
@endforeach
</ul>
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