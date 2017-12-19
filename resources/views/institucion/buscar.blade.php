@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buscar Oportunidades Laborales</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                       
                        </div>
                    @endif
                     @if (session('postulacion'))
                        <div class="alert alert-success">
                            {{ session('postulacion') }}
                       
                            <a href="{{ route('postulacionesInstitucion') }}">Mis Postulaciones</a>
                        </div>
                    @endif


<div class="form-group">
    <label for="search-input" class="control-label">Buscar</label>
    <div class="input-group">
        <div class="input-group-addon" id="buscar"><span> <i class="glyphicon glyphicon-search"></i></span></div>
        <input type="search" name="search-input" class="form-control" id="search-input" placeholder="Ingresar busqueda + enter"/>
    </div>
</div>
 

{{-- LISTA DE OPORTUNIDADES flor --}}
<ul class="list-group">
    @foreach($oportunidades as $oportunidad)

   <li class="list-group-item">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">

        {{-- <img class="round" avatar="{{$oportunidad->productor->name}}"/> --}}
  <img src="/cargas/avatars/{{$oportunidad->productor->avatar}}" class="img-responsive round" >

      </div> 
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
             <h4 class="list-group-item-heading">{{ $oportunidad->titulo }}</h4>
             <span>                  
                Publicado por: {{$oportunidad->productor->name}}
                </span>
                     <p>
               @foreach($oportunidad->keywords as $key)
                <a href="{{ url('/institucion/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
               <span class="badge">{{ $key->palabra }}</span>
                  
                </a>
               @endforeach
                </p>

        </div>
    
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <a href="#ventana{{ $oportunidad->id }}"   class="text-center btn btn-default " data-toggle="modal" > ver mas</a>
    </div>
    </div>
       
       
          <!-- boton de la ventana-->
        
         
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
                                            <!-- panel de oportunidad-->
                                    <div class="modal-body"> 
                                    <p class="list-group-item-text"> Experiencia:  {{ $oportunidad->experiencias }}</p>
                                        <p></p>
                                        <ul>
                                            <li>Propuesta: {{ $oportunidad->propuesta }}</li>
                                            
                                            <li>Requisitos: {{ $oportunidad->requisito }}</li>
                                            <li>Categoria: {{ $oportunidad->categoria }}</li>
                                            <li>Rubro: {{ $oportunidad->rubro }}</li>
                                            <li>Franja Horaria:: {{ $oportunidad->disponibilidad }}</li>
                                            <li>Remuneracion: {{ $oportunidad->remuneracion }}</li>
                                             <li>Fecha de Ingreso: {{ $oportunidad->fechaIngreso }}</li>
                                             <li>Fecha de Egreso: {{ $oportunidad->fechaEgreso }}</li>

                                        </ul>
                                        <p></p>
                                    </div>
                                            <!-- panel de contacto-->
                                    <div class="modal-body">     
                                    <p class="list-group-item-text"> Contacto:  {{ $oportunidad->productor->name }}</p>
                                        <p></p>
                                        <ul>
                                            <li>Correo Electronico : {{ $oportunidad->productor->email }}</li>
                                            <li>Direccion: {{ $oportunidad->productor->direccion }}</li>
                                            <li>Telefono: {{ $oportunidad->productor->telefono  }}</li>
      
                                        </ul> 
           
                                        <!-- <p  href="" class="text-center btn">Ver Perfil </p>--> 
                                          <p></p>

                                    </div>
                                     <!-- footer de la ventana-->
                                    <div class="modal-footer">
                                       <div class="row">
                                       <div class="  col-lg-offset-2" >
                                      
                                                   <div class="col-md-1  ">
                                              <a  class="btn btn-success" type="button" href="mailto:{{ $oportunidad->productor->email }}">Contactar  <i class="glyphicon glyphicon-comment"></i> </a>
                                              </div>
                                                <div class="   col-lg-offset-4" >
                                                 <div class="col-md-1">

                                              <form method="POST" action="{{url('institucion/postular')}}" >
                                                {{ csrf_field() }}
                                               <input type="hidden" name="id_institucion" value="{{ Auth::Guard('institucion')->user()->id}}"> 
                                               <input type="hidden" name="id_oportunidad" value="{{  $oportunidad->id }}"> 
                                              <a class="btn btn-primary" type="submit">
                                                Postularme
                                                    <span class="glyphicon glyphicon-hand-up"></span>
                                              </a>
                                                   
                                              </form>
                                                </div></div>

                                            <div class="   col-lg-offset-8" >
                                                   <div class="col-md-1">

                                              <a class="btn btn-danger" type="button" data-dismiss="modal">Cerrar  <i class="glyphicon glyphicon-remove"></i></a>
                                                 </div></div>
                                                   </div>
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



 <script src="{{ asset('js/avatar.js') }} "></script>
  <script src="{{ asset('js/jquery.min.js') }} "></script>
<script type="text/javascript">
     $(document).ready(function(){
        $("#search-input").keydown(function(e){
            if(e.which == 13)
            {
                var buscarurl = "{{ url('/institucion/buscar/')}}";
               location.href = buscarurl+"/"+$(this).val();
            }
        })

         $("#buscar").click(function(e){
           
            
                var buscarurl = "{{ url('/institucion/buscar/')}}";
               location.href = buscarurl+"/"+$("#search-input").val();
            
        })
     })
 </script>
 <style type="text/css">
  #buscar:hover{
    cursor:pointer;

  }

</style>
@endsection