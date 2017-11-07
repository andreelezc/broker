@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class=" col-md-9 col-lg-10 col-md-offset-3 col-lg-offset-1" >   
      <div class="panel panel-default">
             {{-- Titulo del panel. Nombre del Productor --}}
            <div class="panel-heading">
              <h3 class="panel-title text-center">{{ Auth::Guard('productor')->user()->name }}</h3>
            </div>
            
          <div class="panel-body">
            <div class="row">
                 {{-- Avatar--}}
                <div class="col-md-3 col-lg-3 " align="center"> 
                  {{-- <img alt="User Pic" src="{{ asset('img/avatar_2x.png') }}" class="img-circle img-responsive">  --}}
                 <img  height="100" width="100" avatar="{{ Auth::Guard('productor')->user()->name }}" class="img-responsive round">
                </div>
                   {{--Tabla del perfil--}}
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre:</td>
                        <td>{{ Auth::Guard('productor')->user()->name }}</td>
                      </tr>

                      <tr>
                      <td>Foto de Perfil:</td>
                      <td><form  action="{{ url('productor/perfil') }}" method="POST">    
                              <input type="file" name="avatar">  
                               {{--<input type="submit" value="guardar" name="Guardar" class=" btn btn-sm pull-right btn btn-sm btn-primary">--}}
                          </form> 
                      </td>
                                              
                     </tr> 
                      <tr>
                        <td>Direccion:</td>
                        <td>{{ Auth::Guard('productor')->user()->direccion }}</td>
                       
                      </tr>
                      <tr>
                        <td>Telefono: </td>
                        <td>{{ Auth::Guard('productor')->user()->telefono }}
                            
                        </td>
                                                  
                      </tr>
                       <tr>
                        <td>Direccion de Correo:</td>
                        <td>
                            <a href="mailto:{{ Auth::Guard('productor')->user()->email }}">                               
                            {{ Auth::Guard('productor')->user()->email }}
                            </a>
                        </td>
                        
                        
                      </tr>
                      <tr>
                        <td>Descripcion:</td>
                        <td> </td>
                      </tr>
                    </tbody>
                  </table>
                   {{-- botones de abajo --}}
                   <div class="panel-footer  ">
                    <div class="row">
                      <div class="col-md-4">

                          <a data-original-title="Editar Telefono" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">Editar <i class="glyphicon glyphicon-edit"></i></a>
                      
                         </div>

                         <div class="col-md-4">
                             <a data-original-title="Eliminar " data-toggle="tooltip" type="button" class="btn btn-sm btn-success" href="">Mensaje <i class="glyphicon glyphicon-comment"></i> </a>
                         </div>
   
                         <div class="col-md-4">
                             <a data-original-title="Eliminar " data-toggle="tooltip" type="button" class="btn btn-sm btn-danger" href="">Eliminar Perfil  <i class="glyphicon glyphicon-remove"></i> </a>
                         </div>
                    </div>
                  </div>            
            </div> {{--Fin de la Tabla--}}
          </div>
        </div>    
      </div>
    </div>
  </div>
</div>
   <script src="{{ asset('js/avatar.js') }} "></script>
@endsection
