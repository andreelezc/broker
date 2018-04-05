@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                @if(Session::has('registro'))     
                        <div class="alert alert-info text-uppercase text-center" role="alert">
                            <span>{{Session::get('registro')}}</span><strong>Inicia sesión </strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif
                <div class="panel-heading">Registra un Productor</div>

                <div class="panel-body">
                    <div class="row">
                    <form class="form-horizontal" method="POST" action="{{ url('productor/registro') }}">
                        {{ csrf_field() }}
                        {{--Daros del Productor--}}
                        <div class="col-md-6">
                            <div class="panel-heading text-center"><h4>Datos del Productor</h4></div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-5 control-label">Nombre del Productor</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-5 control-label">Dirección del Productor</label>

                            <div class="col-md-7">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cuit') ? ' has-error' : '' }}">
                            <label for="cuit" class="col-md-5 control-label"> CUIT:</label>

                            <div class="col-md-7">
                                <input id="cuit" type="num" class="form-control" name="cuit" value="{{ old('cuit') }}" required>

                                @if ($errors->has('cuit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cuit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email1') ? ' has-error' : '' }}">
                            <label for="email1" class="col-md-5 control-label">Correo Electrónico Productor </label>

                            <div class="col-md-7">
                                <input id="email1" type="email" class="form-control" name="email1" value="{{ old('email1') }}" required>

                                @if ($errors->has('email1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-5 control-label">Contraseña</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-5 control-label">Confirmar contraseña</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        </div>


                      {{-- Datos de contacto ///  <hr style="width:75%; " > --}}
                      <div class="col-md-6">
   
                         <div class="panel-heading text-center"><h4>Datos de contacto</h4></div>

                       
                        <div class="form-group{{ $errors->has('name1') ? ' has-error' : '' }}">
                            <label for="name1" class="col-md-5 control-label text-center">Nombre de contacto:</label>

                            <div class="col-md-7">
                                <input id="name1" type="text" class="form-control" name="name1" value="{{ old('name1') }}" required autofocus>

                                @if ($errors->has('name1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-5 control-label">Correo electrónico de contacto </label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telefono1') ? ' has-error' : '' }}">
                            <label for="telefono1" class="col-md-5 control-label"> Teléfono de contacto </label>

                            <div class="col-md-7">
                                <input id="telefono1" type="num" class="form-control" name="telefono1" value="{{ old('telefono1') }}" required>

                                @if ($errors->has('telefono1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('hora') ? ' has-error' : '' }}">
                            <label for="hora" class="col-md-5 control-label"> Horario de contacto </label>

                            <div class="col-md-7">
                                <input id="hora" type="text" class="form-control" name="hora" value="{{ old('hora') }}" placeholder="Lunes a Viernes: 8:00 hs - 17:00 hs  " required>

                                @if ($errors->has('hora'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hora') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection
