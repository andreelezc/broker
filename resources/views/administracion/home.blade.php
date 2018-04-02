@extends('/layouts.admin')

@section('content') 
<div class="container">
     @if(session('activado'))
                        <div class="alert alert-success text-center" role="alert">

                            <strong>{{session('activado')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 
                     @if(session('suspendido'))
                        <div class="alert alert-danger text-center" role="alert">

                            <strong>{{session('suspendido')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 
        <section>
            <h1 class="text-center">Usuarios Pendientes de Activación</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="table-admin" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tipo</th>{{--  //institucion o productor  --}}
                                    
                                    
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($productores as $user)
                                
                                <tr>
                                    <td><i class="fa fa-user" ></i>Productor</td>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->telefono1}}</td>
                                     <td>
                                         
                                          <a  href="#productor-{{$user->id}}" data-toggle="modal" class="btn btn-success">
                                              <i class="glyphicon glyphicon-user"> </i>&nbspVer Perfil
                                        </a>
                                          @if ($user->estado)
                                          <a class="btn btn-danger boton-desactivar" user="{{$user->id}}" nombre="{{$user->name}}" tipo="productor"><i class="glyphicon glyphicon-remove"></i>&nbspBloquer</a> 
                                          
                                          @else
                                          <a class="btn btn-primary boton-activar" user="{{$user->id}}" nombre="{{$user->name}}" tipo="productor" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</a>
                                            
                                     @endif

                                     </td>
                                    
                                </tr>

                            @endforeach
                               @foreach ($instituciones as $user)
                                
                                <tr>
                                    <td><i class="fa fa-institution" ></i>Institución</td>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->telefono1}}</td>
                                     <td>
                                          <a  href="#institucion-{{$user->id}}" data-toggle="modal" class="btn btn-success">
                                              <i class="fa fa-institution"></i>&nbspVer Perfil</a>
                                          @if ($user->estado)
                                          <a class="btn btn-danger boton-desactivar" user="{{$user->id}}" nombre="{{$user->name}}" tipo="institucion"><i class="glyphicon glyphicon-remove"></i>&nbspSuspender</a> 
                                          
                                          @else
                                               <a class="btn btn-primary boton-activar" user="{{$user->id}}" nombre="{{$user->name}}" tipo="institucion" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</a>
                                            
                                     @endif

                                     </td>
                                    
                                </tr>
                            @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{--  ////modals  --}}
                    @foreach ($productores as $user)
                        <div class="modal fade in" id="productor-{{$user->id}}" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- header de la ventana-->
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title text-center">INFORMACION DEL PRODUCTOR</h4>

                        </div>
                        <!-- contenido de la ventana de la ventana-->
                        <!-- panel de productor-->
                        <div class="modal-body"> 
                        <table class="table table-user-information">
                        <tbody>
                        <tr>
                        <td>Nombre:</td>
                        <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                        <td>Direccion de Correo:</td>
                        <td>
                        <a href="mailto:{{ $user->email }}">                               
                        {{ $user->email }}
                        </a>
                        </td>
                        </tr>

                        <tr>
                        <td>Direccion:</td>
                        <td>{{ $user->direccion }}</td>

                        </tr> 

                        <tr>
                        <td>CP:</td>
                        <td> {{ $user->cp }}</td>
                        </tr> 
                        <tr>
                        <td>Provincia:</td>
                        <td> {{ $user->provincia }}</td>
                        </tr>
                        <tr>
                        <td> Localidad:</td>
                        <td> {{ $user->localidad }}</td>
                        </tr>


                        <tr>
                        <td>Teléfono: </td>
                        <td>{{ $user->telefono }} </td>

                        </tr>

                        <tr>
                        <td>Descripción:</td>
                        <td>{{ $user->descripcion }} </td>
                        </tr>
                        </tbody>
                        </table>

                        {{--Datos de contacto--}}
                        <h3 class="panel-title text-center">Datos del Contacto</h3>
                        <br>
                        <table class="table table-user-information">
                        <tbody>
                        <tr>
                        <td>Nombre:</td>
                        <td>{{ $user->name1 }}</td>
                        <td>

                        </td>  
                        </tr>           
                        <tr>
                        <td>Dirección de correo:</td>
                        <td>
                        <a href="mailto:{{ $user->email1 }}">

                        {{ $user->email1 }}
                        </a>

                        </td>
                        </tr>
                        <tr>
                        <td>Teléfono: </td>
                        <td>{{ $user->telefono1 }} </td>

                        </tr>

                        </tbody>
                        </table>
                        </div>
                        <!-- footer de la ventana-->
                        <div class="modal-footer">

                        <div class="row">
                        <div class="col-lg-offset-1" >
                        <div class="col-md-1  ">
                        <a  class="btn btn-success" type="button" href="mailto:{{ $user->email }}">Contactar  <i class="glyphicon glyphicon-comment"></i> </a>
                        </div>

                        <div class="   col-lg-offset-8" >
                        <div class="col-md-1">
                        <a class="btn btn-danger" type="button" data-dismiss="modal">Cerrar  <i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                        </div>
                        </div>
                        </div>




                        </div>{{-- /modal FOOTER  --}}
                        </div>
                        </div>
                        </div>
                    @endforeach
                    @foreach ($instituciones as $user)
                        <div class="modal fade in" id="institucion-{{$user->id}}" >
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- header de la ventana-->
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title text-center">INFORMACION DE LA INSTITUCIÓN</h4>

                        </div>
                        <!-- contenido de la ventana de la ventana-->
                        <!-- panel de productor-->
                        <div class="modal-body"> 
                        <table class="table table-user-information">
                        <tbody>
                        <tr>
                        <td>Nombre:</td>
                        <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                        <td>Direccion de Correo:</td>
                        <td>
                        <a href="mailto:{{ $user->email }}">                               
                        {{ $user->email }}
                        </a>
                        </td>
                        </tr>

                        <tr>
                        <td>Direccion:</td>
                        <td>{{ $user->direccion }}</td>

                        </tr> 

                        <tr>
                        <td>CP:</td>
                        <td> {{ $user->cp }}</td>
                        </tr> 
                        <tr>
                        <td>Provincia:</td>
                        <td> {{ $user->provincia }}</td>
                        </tr>
                        <tr>
                        <td> Localidad:</td>
                        <td> {{ $user->localidad }}</td>
                        </tr>


                        <tr>
                        <td>Teléfono: </td>
                        <td>{{ $user->telefono }} </td>

                        </tr>

                        <tr>
                        <td>Descripción:</td>
                        <td>{{ $user->descripcion }} </td>
                        </tr>
                        </tbody>
                        </table>

                        {{--Datos de contacto--}}
                        <h3 class="panel-title text-center">Datos del Contacto</h3>
                        <br>
                        <table class="table table-user-information">
                        <tbody>
                        <tr>
                        <td>Nombre:</td>
                        <td>{{ $user->name1 }}</td>
                        <td>

                        </td>  
                        </tr>           
                        <tr>
                        <td>Dirección de correo:</td>
                        <td>
                        <a href="mailto:{{ $user->email1 }}">

                        {{ $user->email1 }}
                        </a>

                        </td>
                        </tr>
                        <tr>
                        <td>Teléfono: </td>
                        <td>{{ $user->telefono1 }} </td>

                        </tr>

                        </tbody>
                        </table>
                        </div>
                        <!-- footer de la ventana-->
                        <div class="modal-footer">

                        <div class="row">
                        <div class="col-lg-offset-1" >
                        <div class="col-md-1  ">
                        <a  class="btn btn-success" type="button" href="mailto:{{ $user->email }}">Contactar  <i class="glyphicon glyphicon-comment"></i> </a>
                        </div>

                        <div class="   col-lg-offset-8" >
                        <div class="col-md-1">
                        <a class="btn btn-danger" type="button" data-dismiss="modal">Cerrar  <i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                        </div>
                        </div>
                        </div>




                        </div>{{-- /modal FOOTER  --}}
                        </div>
                        </div>
                        </div>
                    @endforeach
        </section>
    </div>
     
    <script src="{{ asset('js/jquery.min.js') }} "></script>
    {{--  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>  --}}
    {{--  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>  --}}



  
    <script>

        $(document).ready(function(){
            

            $('.boton-activar').click(function(){
                var t = $(this)
                var user = t.attr('user');
                var tipo = t.attr('tipo')
                var nombre = t.attr('nombre')
                var answer = confirm("Desea confirmar la activacion del usuario "+nombre+' ?');
                if(answer){
                    window.location.href = ('/admin/activar/'+tipo+'/'+user);
                }
            })
             $('.boton-desactivar').click(function(){
                var t = $(this)
                var user = t.attr('user');
                var tipo = t.attr('tipo')
                var nombre = t.attr('nombre')
                var answer = confirm("Desea confirmar la suspención del usuario "+nombre+' ?');
                if(answer){
                    window.location.href = ('/admin/suspender/'+tipo+'/'+user);
                }
            })
        })
    </script>

@endsection