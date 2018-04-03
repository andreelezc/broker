@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{--  //panel central  --}}
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                
                @if(Session::has('registro'))//info de retorno en caso de error
                        <div class="alert alert-info text-uppercase text-center" role="alert">
                            <span>{{Session::get('registro')}}</span><strong>Inicia sesión </strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                @endif
                <div class="panel-heading text-center">Registrar una Institución</div>

                <div class="panel-body">
                    <div class="row">
                        <form class="form-horizontal" method="POST" action="{{ url('institucion/registro') }}"> 
                        {{--  ///campo de comprobacion de seguridad  --}}
                        {{ csrf_field() }}
                        {{--  //vamos a hacer en dos columnas porque tiene muchos campos  --}}
                        <div class="col-md-6">
                            {{--  //para los datos de la institucion  --}}
                             <div class="panel-heading text-center"><h4>Datos de la Institución</h4></div>
                             
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-5 control-label">Nombre de la Institución</label>

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
                            <label for="email" class="col-md-5 control-label">Dirección de la Institución</label>

                            <div class="col-md-7">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cue') ? ' has-error' : '' }}">
                            <label for="cue" class="col-md-5 control-label"> CUE <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Código Único del Establecimiento"></span> </label>

                            <div class="col-md-7">
                                <input id="cue" type="num" class="form-control" name="cue" value="{{ old('cue') }}" required>

                                @if ($errors->has('cue'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('email1') ? ' has-error' : '' }}">
                            <label for="email1" class="col-md-5 control-label">Correo electrónico de la Institución </label>

                            <div class="col-md-7">
                                <input id="email1" type="email" class="form-control" name="email1" value="{{ old('email1') }}" required>

                                @if ($errors->has('email1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-5 control-label">Sitio web de la Institución </label>

                            <div class="col-md-7">
                                <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" required>

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                        </div>
                        <div class="col-md-6">
                            {{--  //para los datos del contacto  --}}
                      
                         <div class="panel-heading text-center"><h4>Información de contacto</h4></div>

                       
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
                            <label for="email" class="col-md-5 control-label">Correo electrónico  de contacto</label>

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
                        <div class="form-group" >
                       
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>

                         {{--  //para los datos del contacto  --}}
                        </div>
                   

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   <script src={{asset('js/jquery.min.js')}}></script>
   <script>
       $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});
   </script>
@endsection
  