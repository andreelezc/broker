@extends('/layouts.admin')

@section('content') 
<div class="container">
        <section>
            <h1 class="text-center">Usuarios Pendientes de Activación</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
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
                                          <a class="btn btn-success"><i class="glyphicon glyphicon-user"></i>&nbspVer Perfil</a>
                                          @if ($user->status)
                                          <a class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>&nbspBloquer</a> 
                                          
                                          @else
                                          <a class="btn btn-primary boton-activar" user="{{$user->id}}" tipo="productor" ><i class="glyphicon glyphicon-ok"></i>&nbspActivar</a>
                                            
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
                                          <a class="btn btn-success"><i class="fa fa-institution"></i>&nbspVer Perfil</a>
                                          @if ($user->status)
                                          <a class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>&nbspBloquer</a> 
                                          
                                          @else
                                          <a class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i>&nbspActivar</a>
                                            
                                     @endif

                                     </td>
                                    
                                </tr>
                            @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
     <script src="{{ asset('js/avatar.js') }} "></script>
  <script src="{{ asset('js/jquery.min.js') }} "></script>
    <script>

        $(document).ready(function(){

            $('.boton-activar').click(function(){
                var t = $(this)
                var answer = confirm("Desea confirmar la activacion del usuario "+t.attr('user')+' ?');
                if(answer){
                    location.href('del/')
                }
            })
        })
    </script>
@endsection