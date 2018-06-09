@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                  @if (Auth::guard('productor')->check())
                    <h3>Bienvenido {{ Auth::guard('productor')->user()->name }}</h3>
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
                @if(Auth::guard('productor')->user()->avatar !=="default.jpg")
                
                    
                    <div> <img src="/cargas/avatars/{{ Auth::Guard('productor')->user()->avatar }}" class="img-rounded img-responsive" /> </div>
                
                @else
                
                    <div><img src="{{asset('img/tractor.png')}}" class="img-rounded img-responsive" /> </div>

                
                @endif

              </div>
          </div>
          <br>

          {{-- BOTON PERFIL --}}
            <div class="row">
          <div class="col-lg-2 col-md-offset-5  ">
             
                  <a class="btn btn-info btn-block btn-lg" href="{{ url('productor/perfil') }}" type="button"><i class="glyphicon glyphicon-user"></i>  PERFIL</a>
            
            </div>
            </div>
            <br>
             
          <div class="row">
            
              {{-- BOTON CAPACIDADES --}}
              <div class="col-lg-3  ">
                  <a class="btn btn-primary btn-block btn-lg" href="{{ url('productor/mostrarOportunidad')}}" type="button"><i class="glyphicon glyphicon-plus"></i>  AGREGAR </br>OPORTUNIDADES </a>

              </div>
              {{-- BOTON BUSCAR --}}
              <div class="col-lg-3 ">
                  <a class="btn btn-warning btn-block btn-lg" href="{{ url('productor/buscar')}}" type="button"><i class="glyphicon glyphicon-search"></i>  BUSCAR </br> CAPACIDADES</a>
              </div>

               <div class="col-lg-3">
                  <a class="btn btn-danger btn-block btn-lg" href="{{ url('productor/selecciones')}}" type="button"> <i class="glyphicon glyphicon-pushpin"></i> VER </br> SELECCIONES</a>
              </div>

              <div class="col-md-3">
                  <a class="btn btn-success btn-block btn-lg" href="{{ url('productor/postulaciones')}}" type="button"> <i class="glyphicon glyphicon-ok"></i>  POSTULACIONES </br> LABORALES</a>
              </div>
              
          </div>   
          
      </div>
                   

    </div>
</div>
</div>
</div>
@endsection
