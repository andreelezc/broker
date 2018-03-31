@extends('/layouts.admin')

@section('content') 
<div class="container">
        <section>
            <h1 class="text-center">Activacion de Usuarios</h1>
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
                                    <td>Productor</td>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->telefono1}}</td>
                                     <td>
                                          <a class="btn btn-success"><i class="glyphicon glyphicon-user"></i>&nbspVer Perfil</a>
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
@endsection