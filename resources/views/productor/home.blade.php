@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  @if (Auth::guard('productor')->check())
                    Bienvenido {{ Auth::guard('productor')->user()->name }}
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
                  <div><img src="{{asset('img/tractor.png')}}" class="img-rounded img-responsive" /></div>
              </div>
          </div>

          <div class="row">
            {{-- BOTON PERFIL --}}
              <div class="col-md-2 col-xs-4">
                  <a class="btn btn-success btn-block btn-lg" href="{{ url('productor/perfil') }}" type="button"><i class="glyphicon glyphicon-user"></i>  PERFIL</a>
              </div>
            {{--  --}}
              {{-- BOTON CAPACIDADES --}}
              <div class="col-lg-5 col-md-4 col-xs-3">
                  <a class="btn btn-primary btn-block btn-lg" href="{{ url('productor/mostrarOportunidad')}}" type="button"><i class="glyphicon glyphicon-plus"></i>  AGREGAR OPORTUNIDADES </a>

              </div>
              {{-- BOTON BUSCAR --}}
              <div class="col-lg-5 col-md-4 col-sm-4 col-xs-4">
                  <a class="btn btn-warning btn-block btn-lg" href="{{ url('productor/buscar')}}"  type="button"><i class="glyphicon glyphicon-search"></i>  BUSCAR CAPACIDADES</a>
              </div>
              {{--  --}}
          </div>

          
          
      </div>
                   

    </div>
</div>
</div>
</div>
@endsection
