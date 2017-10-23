@extends('layouts.app')

@section('content')

 <div class="panel panel-default">
    <div class="panel-body">
        <h1 class="text-center">Institución Educativa</h1>
       <div class="row">
    <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-6">
        <a class="btn btn-default btn-block" type="button" href="{{ url('institucion/acceso') }}">
          <img src="{{asset('img/acceder.png')}}" class="img-circle img-responsive center-block"/> 
           <h3 class="text-center">INGRESAR</h3>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
        <a class="btn btn-default btn-block" type="button" href="{{ url('institucion/registro') }}">
          <img  src="{{asset('img/im5.png')}}"  class="img-circle img-responsive center-block"/>
           <h3 class="text-center">CREAR CUENTA</h3>
        </a>
    </div>
    </div>
    </div>
</div>

@endsection