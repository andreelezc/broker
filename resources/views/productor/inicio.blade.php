@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
              <div class="panel-heading"><h2 class="text-center"> Productores</h2> </div> 

               <div class="panel-body">
                 <div class="row">
                        <div class="col-lg-4 col-lg-offset-2 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-6">
                            <a class="btn btn-default btn-block" type="button" href="{{ url('productor/acceso') }}">
                              <img src="{{asset('img/acceder.png')}}" class="img-circle img-responsive center-block"/> 
                               <h5 class="text-center">INGRESAR</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
                            <a class="btn btn-default btn-block" type="button" href="{{ url('productor/registro') }}">
                              <img  src="{{asset('img/im5.png')}}"  class="img-circle img-responsive center-block"/>
                               <h5 class="text-center">CREAR CUENTA</h5>
                            </a>
                        </div>
                 </div>
              </div>
            </div>

        </div>
    </div>
  </div>
@endsection