@extends('layouts.app')
@section('content')
<div class="container">
      <div class="row">

        <div class="   col-lg-offset-0" >
   
   
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Capacidades de  {{ Auth::Guard('institucion')->user()->name }}
              </h3> </div>
               <br>
                {{--Boton de nuevo --}}
              <div class="col-md-2">
               <a data-original-title="Editar Telefono" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"  href="{{ url('institucion/nuevaCapacidad')}}" ><i class="glyphicon glyphicon-plus"></i></a>
           </div>

            

                    {{-- LISTA DE Capacidades  --}}




 
                
         
          



                {{--Boton de editar --}}
            <div class="  col-lg-offset-8" >
                 <div class="row">
                        <div class="col-md-1  ">
                            <a data-original-title="Editar Capacidades" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i>   </a>
                        </div>
                        {{--Boton de eliminar --}}
                        <div class="   col-lg-offset-8" >
                         <div class="col-md-1">
                            <a data-original-title="Eliminar Capacidades" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                         </div>
                        </div>
                         
                </div>
                </div>
               
            </div>
        </div>
         </div>
         </div>
@endsection