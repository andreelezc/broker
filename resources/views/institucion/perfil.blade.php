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
          <div class="row">
                {{-- Avatar--}}
              <div class="col-md-3 col-lg-3 " align="center"> 
                {{-- <img alt="User Pic" src="{{ asset('img/avatar_2x.png') }}" class="img-circle img-responsive">  --}}
                <img  height="100" width="100" avatar="{{ Auth::Guard('institucion')->user()->name }}"  class="img-responsive round" >  
                <br>
                 <input type="file" name="avatar">  

              </div>
             
               {{--Tabla del perfil--}}
              <div class=" col-md-18 col-lg-7 col-lg-offset-1"> 
                <table class="table table-user-information">
                <tbody>
                 <tr>
                        <td>Nombre:</td>
                        <td>{{ Auth::Guard('institucion')->user()->name }}</td>
                         <td>
                      
                  </td>  
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
                         
                      </tr>  
                      <tr>
                        <td>CP:</td>
                        <td> </td>
                      </tr> 
                      <tr>
                        <td>Provincia:</td><td> Localidad:</td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>Pais:</td>
                        <td> </td>
                      </tr>  

                    <tr>
                        <td>Telefono: </td>
                        <td>{{ Auth::Guard('institucion')->user()->telefono }}
                            
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

                      {{--Boton de Editar Perfil--}}
                    

                          <div class="col-md-4">
                              <a href="#ventana"  data-original-title="Editar Perfil" type="button" class="btn btn-sm btn-primary " data-toggle="modal" > Editar <i class="glyphicon glyphicon-edit"></i></a>
                           </div>
    
                           {{--Inicio de modal--}}
                           <div class="modal fade in" id="ventana" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- header de la ventana-->

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title"> Editar Perfil de Institucion  </h4>

                                    </div>
                                     <!-- contenido de la ventana de la ventana-->
                                            <!-- panel de editar perfil-->
                                    
                                         <table class="table table-user-information">
                                        <tbody>
                                         <tr>
                                                <td>Nombre:</td>
                                                <td><input type="" name="" value="{{ Auth::Guard('institucion')->user()->name }}"></td>
                                                 <td>
                                              
                                          </td>  
                                         </tr>     
                                         
                                              <tr>
                                                  <td>Direccion:</td>
                                                <td><input type="" name="" value="{{ Auth::Guard('institucion')->user()->direccion }}"></td>
                                                 
                                              </tr>                  
                                            <tr>
                                                <td>Telefono: </td>
                                                <td><input type="" name="" value="{{ Auth::Guard('institucion')->user()->telefono }}"></td>
                                                                          
                                              </tr>
                                              
                                                
                                              <tr>
                                                <td>Descripcion:</td>
                                                <td> <textarea  rows="4"   cols="60" placeholder="Elavora una breve Descripcion del perfil de la institucion"></textarea></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                            
                                     <!-- footer de la ventana-->
                                  <div class="modal-footer">
                                    <div class="  col-lg-offset-2" >
                                       <div class="row">
                                              <div class="col-md-1  ">
                                                  <a data-original-title="Editar Capacidades" data-toggle="tooltip" type="button" class="btn btn-sm btn-success" href=" ">Guardar  <i class="glyphicon glyphicon-edit"></i>   </a>
                                              </div>
                                              {{--Boton de Guaedar --}}                                            
                                       </div>{{-- end row --}}
                                              
                                    </div>
                                  </div>
                        </div>{{-- modal --}}
                          </div>
                      </div> {{-- modal --}} 




                         <div class="col-md-4">
                             <a data-original-title="Eliminar " data-toggle="tooltip" type="button" class="btn btn-sm btn-success" href="">Mensaje <i class="glyphicon glyphicon-comment"></i> </a>
                         </div>
   
                         <div class="col-md-4">
                             <a data-original-title="Eliminar " data-toggle="tooltip" type="button" class="btn btn-sm btn-danger" href="">Eliminar Perfil  <i class="glyphicon glyphicon-remove"></i> </a>
                         </div>
                     </div>
                  </div>  
                </div> {{--Fin Tabla--}}
              </div>
            </div>
          </div>{{--Fin panel --}}   
        </div>
      </div>
    </div>

    

    <script src="{{ asset('js/avatar.js') }} "></script>
@endsection
