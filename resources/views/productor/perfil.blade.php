@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class=" col-md-9 col-lg-12 col-md-offset-3 col-lg-offset-1" >   
      <div class="panel panel-default">
             {{-- Titulo del panel. Nombre del Productor --}}
            <div class="panel-heading">
              <h3 class="panel-title text-center">{{ Auth::Guard('productor')->user()->name }}</h3>
            </div>
            
          <div class="panel-body">
              {{--Mensaje cuando se elimina un perfil--}}
                  @if(session('success'))
                        <div class="alert alert-success text-center" role="alert">

                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 

            <div class="row">
                 {{-- Avatar--}}
                <div class="col-md-3 col-lg-3 " align="center"> 
                  {{-- <img alt="User Pic" src="{{ asset('img/avatar_2x.png') }}" class="img-circle img-responsive">  --}}
                 {{--<img  height="100" width="100" avatar="{{ Auth::Guard('productor')->user()->name }}" class="img-responsive round">
                  <input type="file" name="avatar">  --}}
                          <div class="col-md-10 col-md-offset-4">
                               <img src="/cargas/avatars/{{ Auth::Guard('productor')->user()->avatar }}" style="width:150px; height:150px; float:left; margin-right:30px;"  class="img-responsive" >
                              <br>
                              <label>Cambiar foto de perfil:</label>
                         </div>
                          <div class="col-md-10 col-md-offset-0">
                              <form enctype="multipart/form-data" action="{{url('productor/perfil')}}" method="POST">   
                                <input type="file" value="Seleccionar imagen" name="avatar"  accept="image/*" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <br>
                                <input type="submit" value="Cargar" class="pull-right btn btn-sm btn-primary">
                              </form>
                       </div>

                
                </div>
                   {{--Tabla del perfil--}}
                   <h3 class="panel-title text-center">Datos del Productor</h3>
                <br>
                <div class=" col-md-10 col-lg-6 col-lg-offset-1 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre:</td>
                        <td>{{ Auth::Guard('productor')->user()->name }}</td>
                      </tr>

                      <tr>
                        <td>Direccion de Correo:</td>
                        <td>
                            <a href="mailto:{{ Auth::Guard('productor')->user()->email1 }}">                             
                            {{ Auth::Guard('productor')->user()->email1 }}
                            </a>
                        </td>
                      </tr>

                      <tr>
                        <td>Direccion:</td>
                        <td>  {{ Auth::Guard('productor')->user()->direccion }}</td>
                       
                      </tr> 
                      <tr>
                        <td>CUIL:</td>
                        <td>{{ Auth::Guard('productor')->user()->cuil }}</td>
                       
                      </tr> 
                      <tr>
                        <td>CP:</td>
                        <td> {{ Auth::Guard('productor')->user()->cp }}</td>
                      </tr> 
                      <tr>
                        <td>Provincia:</td>
                        <td> {{ Auth::Guard('productor')->user()->provincia }}</td>
                      </tr>
                      <tr>
                        <td> Localidad:</td>
                        <td> {{ Auth::Guard('productor')->user()->localidad }}</td>
                      </tr>
                        

                    <tr>
                        <td>Teléfono: </td>
                        <td>{{ Auth::Guard('productor')->user()->telefono }} </td>
                                                  
                      </tr>
                      
                      <tr>
                        <td>Descripción:</td>
                        <td>{{ Auth::Guard('productor')->user()->descripcion }} </td>
                      </tr>
                       <tr>
                        <td>Sitio Web: </td>
                        <td>{{ Auth::Guard('productor')->user()->url }} </td>                          
                    </tr>
                    </tbody>
                  </table>
                  <hr style="width:75%; " > 

                  {{--Datos de contacto--}}
                  <h3 class="panel-title text-center">Datos del Contacto</h3>
                   <br>
                   <table class="table table-user-information">
                <tbody>
                 <tr>
                        <td>Nombre:</td>
                        <td>{{ Auth::Guard('productor')->user()->name1 }}</td>
                         <td>
                      
                  </td>  
                 </tr>           
                  <tr>
                      <td>Dirección de correo:</td>
                    <td>
                        <a href="mailto:{{ Auth::Guard('productor')->user()->email }}">
                            
                        {{ Auth::Guard('productor')->user()->email }}
                        </a>
                        
                    </td>
                    </tr>
                    <tr>
                        <td>Teléfono: </td>
                        <td>{{ Auth::Guard('productor')->user()->telefono1 }} </td>
                                                  
                      </tr>
                   
                    </tbody>
                  </table>

                   {{-- botones de abajo --}}
                   <div class="panel-footer  ">
                    <div class="row">
                       {{--Boton de Editar Perfil--}}
                      <div class="col-md-3 col-lg-offset-1">

                          <a href="#ventana"  data-original-title="Editar Perfil" type="button" class="btn btn-sm btn-primary " data-toggle="modal" > Editar <i class="glyphicon glyphicon-edit"></i></a>
                      
                         </div>

                         {{--Inicio de modal--}}
                           <div class="modal fade in" id="ventana" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- header de la ventana-->

                                   {{--  <div class="modal-header"> --}}
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                   {{--  </div> --}}

                        <div class="container">
                          <div class="row">
                              <div class="  col-md-6  col-md-offset-2 col-lg-offset-0" >   


                                    <div class="panel-heading">
                                    <h3 class="panel-title text-center modal-title">  Editar Perfil de {{ Auth::Guard('productor')->user()->name }}</h3>
                                  </div>
                                     <!-- contenido de la ventana de la ventana-->
                                            <!-- panel de editar perfil-->
                                     
                                     {{-- Inicio FORM --}}
                                    <form method="POST" action="{{url('productor/perfil')}}" class="bootstrap-form-with-validation">
                                         {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        
                                        {{--  Datos del productor --}}
                                      <h3 class="panel-title text-center"> Datos de Productor</h3>
                                         <table class="table table-user-information">
                                        <tbody>
                                         <tr>
                                                <td>Nombre:</td>
                                                <td><input  class="form-control" type="" name="name" value="{{ Auth::Guard('productor')->user()->name }}"></td>
                                                 <td>
                                          </td>  
                                         </tr>     
                                         
                                              <tr>
                                                  <td>Dirección:</td>
                                                <td><input  class="form-control" type="" name="direccion" value="{{ Auth::Guard('productor')->user()->direccion }}"></td>
                                                 
                                              </tr>
                                              <tr>
                                                <td>CUIL:</td>
                                               <td><input class="form-control" type="" name="cuil" value="{{ Auth::Guard('productor')->user()->cuil }}"> </td>
                                              </tr> 
                                              <tr>
                                                <td>CP:</td>
                                               <td><input class="form-control" type="" name="cp" value="{{ Auth::Guard('productor')->user()->cp }}"> </td>
                                              </tr> 
                                              <tr>
                                                  <td>Provincia:</td>
                                                <td><input class="form-control" type="" name="provincia" value="{{ Auth::Guard('productor')->user()->provincia }}"></td>
                                                 
                                              </tr>
                                              <tr><td>Localidad:</td>
                                                <td> <input class="form-control" type="" name="localidad" value="{{ Auth::Guard('productor')->user()->localidad }}"></td>

                                               </tr>              
                                            <tr>
                                                <td>Teléfono: </td>
                                                <td><input class="form-control" type="" name="telefono" value="{{ Auth::Guard('productor')->user()->telefono }}"></td>
                                                                          
                                              </tr>

                                              <tr>
                                                <td>Descripción:</td>
                                                <td> <input  class="form-control" maxlength="190"   placeholder="Elaborá una breve descripción de tu perfil " name="descripcion" value="{{ Auth::Guard('productor')->user()->descripcion }}" ></td>
                                              </tr>
                                             <tr>
                                                <td>Sitio Web: </td>
                                                <td><input class="form-control" type="" name="url" value="{{ Auth::Guard('productor')->user()->url }}"></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                           {{-- Info de contacto --}}
                                          <hr style="width:75%; " > 
                                          <h3 class="panel-title text-center">Información del Contacto</h3>

                                           <table class="table table-user-information">
                                        <tbody>
                                         <tr>
                                                <td>Nombre:</td>
                                                <td><input class="form-control" type="" name="name1" value="{{ Auth::Guard('productor')->user()->name1 }}"></td>
                                                 <td>                                           
                                          </td>  
                                         </tr>             
                                              
                                               <tr>
                                                <td>Teléfono: </td>
                                                <td><input class="form-control" type="" name="telefono1" value="{{ Auth::Guard('productor')->user()->telefono1 }}"></td>                                          </tr>
                                              <tr>
                                                <td>Horario  <br>Contacto: </td>
                                                <td><input class="form-control" type="" name="hora" value="{{ Auth::Guard('productor')->user()->hora }}"></td>      
                                                 </tr>

                                            </tbody>
                                          </table>

                                            
                                     <!-- footer de la ventana-->
                                  <div class="modal-footer">
                                    <div class="  col-lg-offset-2" >
                                       <div class="row">
                                              <div class="col-md-4 col-lg-offset-4 ">
                                                   {{--Boton de Guaedar --}}  
                                                  
                                                   <input type="hidden" name="id" value="{{ Auth::Guard('productor')->user()->id }}" >
                                                  <input type="submit" data-original-title="Editar perfil" data-toggle="tooltip" class="btn btn-sm btn-success" value="Guardar cambios " > </input>
                                              </div>
                                              {{--Boton de Guaedar --}}                                            
                                       </div>{{-- end row --}}
                                              
                                    </div>
                                  </div>

                              </form> {{--Fin from--}}    
                               </div> </div> </div>
                        </div>{{-- modal --}}
                          </div>
                      </div> {{-- modal --}} 


                          {{--<div class="col-md-4">
                             <a data-original-title="postulaciones " data-toggle="tooltip" type="button" class="btn btn-sm btn-success" href="{{ route('seleccionesProductor') }}">Mis Mis Selecciones <i class="glyphicon glyphicon-pushpin"></i> </a>
                            
                         </div>--}}
   
                           <form method="post" action="{{ route('eliminarPerfil') }}">
                                                          {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        {{-- <input type="hidden" name="_method" value="delete"> --}}
                                <input type="hidden" name="id" value="{{ Auth::Guard('productor')->user()->id }}">
                                <div class="col-md-6 col-md-offset-2">
                                 
                                  <button class="btn btn-sm btn-danger" type="submit" >Eliminar Perfil <i class="glyphicon glyphicon-trash"></i></button>
                                 
                                </div>
                        </form>
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
