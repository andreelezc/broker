@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
              <div class="col-md-3 col-xs-4">
                  <a class="btn btn-success btn-block btn-lg" href="{{ url('productor/perfil') }}" type="button">PERFIL</a>
              </div>
              <div class="col-md-4 col-xs-4">
                  <a class="btn btn-primary btn-block btn-lg" href="{{ url('productor/mostrarOportunidad')}}" type="button"> OPORTUNIDADES</a>
              </div>
              <div class="col-lg-5 col-md-4 col-sm-4 col-xs-4">
                  <a class="btn btn-warning btn-block btn-lg" href="{{ url('productor/buscar')}}" type="button">BUSCAR CAPACIDADES</a>
              </div>
          </div>
      </div>
                   

    </div>
</div>
</div>
</div>
@endsection
