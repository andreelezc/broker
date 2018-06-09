@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>Ofertas Laborales </h4></div>

                <div class="panel-body">
                     @if(session('success'))
                        <div class="alert alert-danger text-center" role="alert">

                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 

                      {{-- LISTA DE Ofertas flor --}}
                      <ul class="list-group">
                          @foreach ($ofertas as $oportunidad)
                                   <h1>{{$oportunidad->titulo}}</h1>
                                @endforeach
                      </ul>
                   
                     

                 </div>
            </div>
        </div>
    </div>
</div>
 

@endsection