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


<div class="form-group">
    <label for="search-input" class="control-label">Buscar</label>
    <div class="input-group">
        <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
        <input type="search" name="search-input" class="form-control" id="search-input" />
    </div>
</div>
 

{{-- LISTA DE OPORTUNIDADES ivan --}}
<ul class="list-group">
    @foreach($oportunidades as $oportunidad)

   <li class="list-group-item">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><img class="round" avatar="{{$oportunidad->productor->name}}"/>


      </div> 
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
             <h4 class="list-group-item-heading">{{ $oportunidad->titulo }}</h4>
             <span>                  
                Publicado por: {{$oportunidad->productor->name}}
                </span>
                     <p>Palabras
               @foreach($oportunidad->keywords as $key)
                <a href="{{ url('/institucion/buscar/'.$key->palabra) }}" title="Mas Ofertas de {{ $key->palabra }}">
               <span class="badge">{{ $key->palabra }}</span>
                  
                </a>
               @endforeach
                </p>

        </div>
    
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
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
 <script src="{{ asset('js/avatar.js') }} "></script>
@endsection