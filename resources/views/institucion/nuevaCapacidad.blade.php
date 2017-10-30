@extends('layouts.app')
@section('content')
<div class="container">
      <div class="row">

        <div class="   col-lg-offset-0" >
   
   
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Capacidades de  {{ Auth::Guard('institucion')->user()->name }}
              </h3> </div>
              <div class="col-md-3 col-lg-1 " align="center"> 
                    {{-- <img alt="User Pic" src="{{ asset('img/avatar_2x.png') }}" class="img-circle img-responsive">  --}}
                    <img  height="100" width="100" avatar="{{ Auth::Guard('institucion')->user()->name }}" class="img-responsive round" >
                    

                </div>
               <br>
                {{--Boton de nuevo --}}
              <div class="col-md-2">
               <a data-original-title="Editar Telefono" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"  href="{{ url('institucion/capacidad')}}" ><i class="glyphicon glyphicon-plus"></i></a>  
           </div>
           



  {{-- LISTA DE Capacidades  --}}
 


    <div class="row">
     
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
                           
                <table class="table table-user-information">
                    <tbody>

                      <tr>
                          <td>Titulo:
                          <td><a href="#ventana"   class=" btn btn-default " data-toggle="modal" > mostrar </a></td>
                      </tr>
                    @foreach(Auth::Guard('institucion')->user()->capacidades as $capacidad)

                      <tr>
                          <td>Titulo: {{$capacidad->titulo}} </td>
                          <td><a href="#ventana"   class="text-center btn btn-default " data-toggle="modal" > mostrar </a></td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
               
   </div>
 </div>

 {{-- LISTA DE Mostrar Capacidades  --}}

<div class="modal fade in" id="ventana" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- header de la ventana-->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title">Titulo:</h4>

                                 

                    
<div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 " >
   
   
          <div class="panel panel-default">
            
            <div class="panel-body">
              <div class="row">
                
            
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>

                      <tr>
                          <td>Experiencia: </td>
                          <td></td>
                      </tr>

                      <tr>
                        <td>Categoria:</td>
                        <td></td>
                        <td>
                        <span class="pull-right">
                        </td>
                      </tr>
                   
                    <tr>
                        <td>Rubro: </td>
                        <td></td>
                        <td>
                        <span class="pull-right">
                        </td>    
                    </tr>

                    <tr>
                          <td>Disponibilidad: </td>
                          <td></td>
                      </tr>

                      <tr>
                          <td>Remuneracion Pretendida: </td>
                          <td></td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
         
                </div>
              </div>
            </div>
             {{--Boton de editar --}}
            <div class="  col-lg-offset-2" >
                 <div class="row">
                        <div class="col-md-1  ">
                            <a data-original-title="Editar Capacidades" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">Editar  <i class="glyphicon glyphicon-edit"></i>   </a>
                        </div>
                        {{--Boton de eliminar --}}
                        <div class="   col-lg-offset-7" >
                         <div class="col-md-1">
                            <a data-original-title="Eliminar Capacidades" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger">Eliminar  <i class="glyphicon glyphicon-remove"></i></a>
                         </div>
                        </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/avatar.js') }} "></script>
       </div>
     </div>
     </div>
  </div>

               
                         
                </div>
                </div>
               
            </div>
        </div>
         </div>
         </div>
@endsection