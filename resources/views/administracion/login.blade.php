@extends('layouts.app')

@section('content')



 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                @if(Session::has('registro'))     
                        <div class="alert alert-success text-uppercase text-center" role="alert">
                            <span>{{Session::get('registro')}}</span> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif
                <div class="panel-heading text-center"><h3>Acceso Administrador</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('admin/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar contraseña
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Acceso
                                </button>

                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña?
                                </a> --}}
                            </div>
                        </div>
                        {{--  <hr style="width:75%; " >
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
        
                                 <label>¿Aún no tienes cuenta?</label>
                            <a class="btn btn-link" href="{{ url('admin/registro') }}">
                                       Registrate.
                                    </a>
                            </div>
                        </div>  --}}


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
