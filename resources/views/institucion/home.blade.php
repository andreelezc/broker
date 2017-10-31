@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  @if (Auth::guard('institucion')->check())
                      Bienvenido {{ Auth::guard('institucion')->user()->name }}
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
                  <div><img src="{{asset('img/escuela.png')}}" class="img-rounded img-responsive" /></div>
              </div>
          </div>
          <br>
          <div class="row">
            {{-- BOTON PERFIL --}}
              <div class="col-md-3 col-xs-4">
                  <a class="btn btn-success btn-block btn-lg" href="{{ url('institucion/perfil') }}" type="button">PERFIL</a>
              </div>
            {{--  --}}
              {{-- BOTON CAPACIDADES --}}
              <div class="col-md-4 col-xs-4">
                  <a class="btn btn-primary btn-block btn-lg" href="{{ url('institucion/mostrarCapacidad
                  ')}}" type="button"> CAPACIDADES</a>
              </div>
              {{-- BOTON BUSCAR --}}
              <div class="col-lg-5 col-md-4 col-sm-4 col-xs-4">
                  <a class="btn btn-warning btn-block btn-lg" href="{{ url('institucion/buscar')}}" type="button">BUSCAR OPORTUNIDADES</a>
              </div>
              {{--  --}}
          </div>
      </div>
                   

    </div>
</div>
</div>
</div>
@endsection
