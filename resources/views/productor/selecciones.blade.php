@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mis Selecciones</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                       
                        </div>
                    @endif



{{-- LISTA DE OPORTUNIDADES flor --}}
<ul class="list-group">
    @foreach(Auth::Guard('productor')->user()->intereses as $interes)
	
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
                Publicado por: {{$interes->capacidad->institucion->name}}
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
        <a href="#ventana{{ $interes->capacidad->id }}"   class="text-center btn btn-default " data-toggle="modal" > ver mas</a>
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