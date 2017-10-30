@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">

        <div class=" col-md-offset-6 col-lg-offset-0" >
   
   
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">{{ Auth::Guard('institucion')->user()->name }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
                    {{-- <img alt="User Pic" src="{{ asset('img/avatar_2x.png') }}" class="img-circle img-responsive">  --}}
                    <img  height="100" width="100" avatar="{{ Auth::Guard('institucion')->user()->name }}"  class="img-responsive round" >
                   
                     
                </div>
            
                <div class=" col-md-9 col-lg-9"> 
                  <table class="table table-user-information">
                    <tbody>     
                      <tr>
                        <td>Nombre:</td>
                        <td>{{ Auth::Guard('institucion')->user()->name }}</td>
                      </tr>

                     <tr>
                      <td>Imagen:</td>
                          <td><form enctype="multipart/form-data" action="{{ url('institucion/perfil') }}" method="POST">
                            {{ csrf_field() }}
                          <input type="file" name="avatar">  
                          <input type="submit" name="Guardar" class="pull-right btn btn-sm btn-primary">
                          </form> </td>
                      </tr>
                      
                      <tr>
                          <td>Direccion de Correo:</td>
                        <td>
                            <a href="mailto:{{ Auth::Guard('institucion')->user()->email }}">
                                
                            {{ Auth::Guard('institucion')->user()->email }}
                            </a>
                        </td>
                      </tr>
                      <tr>
                          <td>Direccion:</td>
                        <td>{{ Auth::Guard('institucion')->user()->direccion }}</td>
                         <td>
                          <a data-original-title="Editar Telefono" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">Editar <i class="glyphicon glyphicon-edit"></i></a>
                        
                        <span class="pull-right">
                        </td>
                      </tr>
                   
                    <tr>
                        <td>Telefono: </td>
                        <td>{{ Auth::Guard('institucion')->user()->telefono }}
                            
                        </td>
                        <td>
                          <a data-original-title="Editar Telefono" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">Editar <i class="glyphicon glyphicon-edit"></i></a>
                          {{-- glyphicon glyphicon-ok --}}
                        <span class="pull-right">
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
         
                </div>
              </div>
            </div>
             <div class="panel-footer col-md-18 col-lg-9 center">
                     <div class="row">
   
                         <div class="col-md-2">
                             <a class="btn btn-lg btn-primary btn-block">Maps</a>
                         </div>
                     </div>


                    {{-- Mostrar maps --}}


             </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/avatar.js') }} "></script>
@endsection
