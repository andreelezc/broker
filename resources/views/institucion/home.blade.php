@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                  @if (Auth::guard('institucion')->check())
                      <h3>Bienvenido {{ Auth::guard('institucion')->user()->name }}</h3>
                  @endif
                </div>

      <div class="panel-body">
         @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                          @endif
          <div class="row">
              <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                  
                @if(Auth::guard('institucion')->user()->avatar !=="default.jpg")
                
                    
                    <div> <img src="/cargas/avatars/{{ Auth::Guard('institucion')->user()->avatar }}" class="img-rounded img-responsive" /> </div>
                
                @else
                
                    <div><img src="{{asset('img/escuela.png')}}" class="img-rounded img-responsive" /> </div>

                
                @endif


              </div>
          </div>
          <br>
          {{-- BOTON PERFIL --}}
            <div class="row">
          <div class="col-lg-2 col-md-offset-5  ">
             
                  <a class="btn btn-info btn-block btn-lg" href="{{ url('institucion/perfil') }}" type="button"><i class="glyphicon glyphicon-user"></i>  PERFIL</a>
            
            </div>
            </div>
            <br>
             
          <div class="row">
            
              {{-- BOTON CAPACIDADES --}}
              <div class="col-md-3">
                  <a class="btn btn-primary btn-block btn-lg" href="{{ url('institucion/mostrarCapacidad')}}" type="button"><i class="glyphicon glyphicon-plus"></i>  AGREGAR </br> CAPACIDADES </a>

              </div>
              {{-- BOTON BUSCAR --}}
              <div class="col-md-3">
                  <a class="btn btn-warning btn-block btn-lg" href="{{ url('institucion/buscar')}}" type="button"><i class="glyphicon glyphicon-search"></i>  BUSCAR </br> OPORTUNIDADES</a>
              </div>

               <div class="col-md-3">
                  <a class="btn btn-danger btn-block btn-lg" href="{{ url('institucion/postulaciones')}}" type="button"> <i class="glyphicon glyphicon-hand-up"></i> VER  </br>POSTULACIONES</a>
              </div>
              <div class="col-md-3">
                  <a class="btn btn-success btn-block btn-lg" href="{{ url('institucion/ofertas')}}" type="button"> <i class="glyphicon glyphicon-ok"></i> OFERTAS  </br>LABORALES</a>
              </div>
              {{--  --}}
          </div>
      </div>
                   

    </div>
</div>
</div>
</div>
@endsection
