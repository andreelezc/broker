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

    <a href="#" class="list-group-item">
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
        <p class="list-group-item-text">
            {{ $capacidad->experiencias }}
        </p>
        <p></p>
        <ul>
            <li>Categoria: {{ $capacidad->categoria }}</li>
            <li>Rubro: {{ $capacidad->rubro }}</li>
            <li>Disponibilidad: {{ $capacidad->disponibilidad }}</li>
            <li>Remuneracion Pretendida: {{ $capacidad->remuneracion }}</li>
        </ul>
            
    </a>

@endforeach

</ul>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection