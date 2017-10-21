@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Perfil de la Institucion</div>

   <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('institucion/registro') }}">
                        {{ csrf_field() }}


<div class=" col-md-1"><img src="{{asset('img/avatar_2x.png')}}" height="100"  /></div>


            @if (Auth::guard('institucion')->user()->name == 0)
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Usuario</label>
                            <div class="col-md-5"> 

                                <label for="name" class="col-md-2 control-label">{{ Auth::guard('institucion')->user()->name }} </label>
                                    
                                @else
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                
                                @endif

                                
                              

                               
                            </div>
                        </div>

                      @if (Auth::guard('institucion')->user()->direccion == 0)

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Direccion </label>

                            <div class="col-md-6">

<label for="direccion" class="col-md-4 control-label">{{ Auth::guard('institucion')->user()->direccion }} </label>
                                @else
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>

                         
                       
                               
                                 
                                
 @endif

                            </div>
                        </div>

 
 
                         <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Telefono </label>

  @if (Auth::guard('institucion')->user()->telefono == 0)
                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
   @else
                                <label for="telefono" class="col-md-4 control-label">{{ Auth::guard('institucion')->user()->telefono }} </label>
                              
                                
 @endif
                                
                            </div>
                        </div>


@if (Auth::guard('institucion')->check())

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email </label>

                            <div class="col-md-6">

                                <label for="email" class="col-md-4 control-label">{{ Auth::guard('institucion')->user()->email }} </label>
                                 @else
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                 
 @endif
                               
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection
