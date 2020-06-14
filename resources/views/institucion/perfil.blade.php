@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="  col-md-9 col-lg-12 col-md-offset-3 col-lg-offset-0" >   
      <div class="panel panel-default">
            {{-- Titulo del panel. Nombre de la institucion --}}
          <div class="panel-heading">
              <h3 class="panel-title text-center">{{ Auth::Guard('institucion')->user()->name }}</h3>
          </div>

  <div class="panel-body">

                    @if(session('success'))
                        <div class="alert alert-success text-center" role="alert">

                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 
                    
                    
           

        <div class="panel-body">
          <div class="row">
                {{-- Avatar--}}
              <div class="col-md-3 col-lg-3 " align="center"> 
                {{-- 
                <img  height="100" width="100" avatar="{{ Auth::Guard('institucion')->user()->name }}" src="{{ asset('img/default.jpg') }}" class="img-responsive round" >  --}}

                      <div class="col-md-10 col-md-offset-4">
                               <img src="/cargas/avatars/{{ Auth::Guard('institucion')->user()->avatar }}" style="width:150px; height:150px; float:left;  margin-right:30px;"  class="img-responsive" >
                              <br><br><br> <br><br><br> <br><br>
                              <label>Cambiar foto de perfil:</label>
                         </div>
                        <div class="col-md-10 col-md-offset-0">
                              <form enctype="multipart/form-data" action="{{url('institucion/perfil')}}" method="POST">   
                                <input type="file" value="Seleccionar imagen" name="avatar"  accept="image/*" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <br>
                                <input type="submit" value="Cargar" class="pull-right btn btn-sm btn-primary">
                              </form>
                       </div>
              </div>
             

               {{--Tabla del perfil--}}

                <h3 class="panel-title text-center">Datos de la Institución</h3>
                <br>
              <div class=" col-md-10 col-lg-6 col-lg-offset-1"> 
                <table class="table table-user-information">
                <tbody>


                 <tr>
                        <td>Nombre:</td>
                        <td>{{ Auth::Guard('institucion')->user()->name }}</td>
                         <td>
                      
                  </td>  
                 </tr>      
                  <tr>
                          <td>Dirección de correo:</td>
                        <td>
                            <a href="mailto:{{ Auth::Guard('institucion')->user()->email1 }}">
                                
                            {{ Auth::Guard('institucion')->user()->email1 }}
                            </a>
                            
                        </td>
                        </tr>
                      <tr>
                          <td>Dirección:</td>
                        <td>{{ Auth::Guard('institucion')->user()->direccion }}</td>
                         
                      </tr>  
                       <tr>
                          <td>CUE:</td>
                        <td>{{ Auth::Guard('institucion')->user()->cue }}</td>
                         
                      </tr>  
                      <tr>
                        <td>CP:</td>
                        <td> {{ Auth::Guard('institucion')->user()->cp }}</td>
                      </tr> 
                      <tr>
                        <td> Localidad:</td>
                        <td> {{ Auth::Guard('institucion')->user()->localidad }}</td>
                      </tr>
                              <tr>
                                <td>Provincia:</td>
                                <td> {{ Auth::Guard('institucion')->user()->provincia }}</td>
                              </tr>
                    <tr>
                        <td>Teléfono: </td>
                        <td>{{ Auth::Guard('institucion')->user()->telefono }} </td>
                                                  
                      </tr>
                      
                      <tr>
                        <td>Descripción:</td>
                        <td>{{ Auth::Guard('institucion')->user()->descripcion }} </td>
                      </tr>

                      <tr>
                        <td>Sitio Web: </td>
                        <td>{{ Auth::Guard('institucion')->user()->url }} </td>                          
                    </tr>

                    </tbody>
                  </table>
                  
                  
                      {{--Datos de contacto--}}
                      <hr style="width:75%; " > 
                   <h3 class="panel-title text-center">Información del Contacto</h3>
                   <br>
                   <table class="table table-user-information">
                <tbody>
                 <tr>
                        <td>Nombre:</td>
                        <td>{{ Auth::Guard('institucion')->user()->name1 }}</td>
                         <td>
                      
                  </td>  
                 </tr>           
                  <tr>
                      <td>Dirección de correo:</td>
                    <td>
                        <a href="mailto:{{ Auth::Guard('institucion')->user()->email }}">
                            
                        {{ Auth::Guard('institucion')->user()->email }}
                        </a>
                        
                    </td>
                    </tr>
                    <tr>
                        <td>Teléfono: </td>
                        <td>{{ Auth::Guard('institucion')->user()->telefono1 }} </td>
                                                  
                    </tr>
                    <tr>
                        <td>Horario de Contacto: </td>
                        <td>{{ Auth::Guard('institucion')->user()->hora }} </td>
                                                  
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

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                          <div class="container">
                          <div class="row">
                              <div class="  col-md-6  col-md-offset-2 col-lg-offset-0" >   
                              
                                         
                                                      {{-- Titulo del panel. Nombre de la institucion --}}
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center modal-title">  Editar Perfil de {{ Auth::Guard('institucion')->user()->name }}</h3>
                                                    </div>
                                                      <hr style="width:75%; " > 

                                     
                                     <!-- contenido de la ventana de la ventana-->
                                            <!-- panel de editar perfil-->
                                            
                        {{-- Inicio FORM --}}
                        <form method="POST" action="{{url('institucion/perfil')}}" class="bootstrap-form-with-validation">
                           {{ csrf_field() }}
                          {{ method_field('PUT') }}

                                          {{--  Datos de la Institución --}}
                                      <h3 class="panel-title text-center"> Datos de la Institución</h3>
                                         <table class="table table-user-information">
                                        <tbody>
                                         <tr>
                                                <td>Nombre:</td>
                                                <td><input class="form-control" type="" name="name" value="{{ Auth::Guard('institucion')->user()->name }}"></td>
                                                 <td>                                           
                                          </td>  
                                         </tr>             
                                              <tr>
                                                  <td>Dirección:</td>
                                                <td><input class="form-control" type="" name="direccion" value="{{ Auth::Guard('institucion')->user()->direccion }}"></td>
                                                 
                                              </tr>
                                              <tr>
                                                <td>CP:</td>
                                               <td><input class="form-control" type="" name="cp" value="{{ Auth::Guard('institucion')->user()->cp }}"> </td>
                                              </tr> 
                                              <tr><td>   Localidad:</td>
                                                <td> <input class="form-control" type="" name="localidad" value="{{ Auth::Guard('institucion')->user()->localidad }}"></td>
                                                
                                              </tr>              
                                                  <tr>
                                                      <td>Provincia:</td>
                                                    <td><input class="form-control" type="" name="provincia" value="{{ Auth::Guard('institucion')->user()->provincia }}"></td>
                                                     
                                                  </tr>
                                               <tr>
                                                <td>Teléfono: </td>
                                                <td><input class="form-control" type="" name="telefono" value="{{ Auth::Guard('institucion')->user()->telefono }}"></td>                                                                         
                                              </tr>

                                              <tr>
                                                <td>Descripción:</td>
                                                <td> <input  class="form-control"  placeholder="Elaborá una breve descripción de tu perfil  "  maxlength="190"  name="descripcion" value="{{ Auth::Guard('institucion')->user()->descripcion }}" ></td>
                                              </tr>

                                              <tr>
                                                <td>Sitio Web: </td>
                                                <td><input class="form-control" type="" name="url" value="{{ Auth::Guard('institucion')->user()->url }}"></td>
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
                                                <td><input class="form-control" type="" name="name1" value="{{ Auth::Guard('institucion')->user()->name1 }}"></td>
                                                 <td>                                           
                                          </td>  
                                         </tr>             
                                              
                                               <tr>
                                                <td>Teléfono: </td>
                                                <td><input class="form-control" type="" name="telefono1" value="{{ Auth::Guard('institucion')->user()->telefono1 }}"></td>                                          </tr>
                                              <tr>
                                                <td>Horario  <br>Contacto: </td>
                                                <td><input class="form-control" type="" name="hora" value="{{ Auth::Guard('institucion')->user()->hora }}"></td>      
                                                 </tr>

                                            </tbody>
                                          </table>

                                     <!-- footer de la ventana-->
                                  <div class="modal-footer">
                                    <div class=" col-md-4  col-lg-offset-4" >
                                       <div class="row">
                                             {{--Boton de Guaedar --}}  
                                                  
                                                   <input type="hidden" name="id" value="{{ Auth::Guard('institucion')->user()->id }}" >
                                                  <input type="submit" data-original-title="Editar perfil" data-toggle="tooltip" class="btn btn-sm btn-success" value="Guardar cambios " >    </input>

                                                                                      
                                       </div>{{-- end row --}}      
                                    </div>
                                  </div>
                                  {{-- END FORM --}}


                      </form> 
                       </div>  </div>{{-- modal --}}
                      </div></div>
                          </div>
                      </div> {{-- modal --}} 

                         <form method="post" action="{{ route('eliminarInstitucion') }}">
                                                          {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        {{-- <input type="hidden" name="_method" value="delete"> --}}
                                <input type="hidden" name="id" value="{{ Auth::Guard('institucion')->user()->id }}">
                                <div class="col-md-6 col-md-offset-2">
                                 
                                  <button class="btn btn-sm btn-danger" type="submit" >Eliminar Perfil <i class="glyphicon glyphicon-trash"></i></button>
                                 
                                </div>
                        </form>

                     </div>
                  </div>  
                </div> {{--Fin Tabla--}}
              </div>
            </div>
     
          </div>{{--Fin panel --}}   
          </div>
        </div>
      </div>
    </div>


  
    

    <script src="{{ asset('js/avatar.js') }} "></script>
@endsection
