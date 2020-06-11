@extends('layouts.app')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});
</script> 

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido a Oportunidades Laborales </div>

           <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                       
                        </div>
                    @endif               
     {{-- Inicio FORM --}}
       <form method="POST" action="{{ url('productor/oportunidad/editar/'.$oportunidad->id) }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
              {{ method_field('PUT') }}
            {{--<h2 class="text-center">Oportunidad Laboral</h2>--}}

            {{-- Titulo--}}
            <div class="form-group">
                <label class="control-label" for="text-input" > Titulo : <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingrese un titulo acorde a su Oportunidad"></span></label>
                 <input class="form-control" type="text" name="titulo" id="text-input" value="{{ $oportunidad->titulo }}">
            </div>
           {{-- Descripcion --}}
            <div class="form-group">
                <label class="control-label" for="email-input"> Descripción:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Describa su Oportunidad"></span> </label>
                <textarea class="form-control"  name="descripcion" maxlength="190"  rows="8" cols="40" id="text-input" placeholder=" Escriba aquí una breve descripción de su capacidad laboral.."> {{ $oportunidad->descripcion }}</textarea>
            </div>
            {{-- PALABRAS CLAVE --}}
        <div class="form-group">
            <div class="row">
               
                <div class="col-md-12"> <label class="control-label">Palabras Clave:</label>
                <label>(ingrese palabras clave para facilitar la busqueda de su oportunidad  laboral)</label>
                </div>
                 @foreach($oportunidad->keywords as $key)
                <div class="col-md-3">
                    <input name="palabra" type="text" class="form-control" required value="{{ $key->palabra }}"  disabled />
                </div>
                
                  @endforeach
            </div>
        </div>  
            {{-- Requsitos --}}
            <div class="form-group">
                <label class="control-label" for="textarea-input">Requisitos:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Requisitos que los postulantes deben cumplir"></span></label>
                <textarea class="form-control" name="requisito" rows="8" cols="40" placeholder=" Mencione requisitos laborales..." id="textarea-input"> {{ $oportunidad->requisito }}</textarea>
            </div>
       
        {{-- DISPONIBILIDAD --}}
   <div class="row">
        <div class="col-md-8">
            
            <div class="form-group">
                <label class="control-label">Disponibilidad Horaria:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Cargar los horarios disponibles "></span></label>

                <div class="row">
                <div class="col-md-8 ">
                <div class="form-group">
                Fecha de inicio:  <input type="date" placeholder="DD" name="fechaInicio" value="{{ $oportunidad->fechaInicio }}" />
               
                </div></div></div>
                
        <table class="table table-user-information">
        <div class="checkbox">   
            <label class="control-label">
                 <tbody> 
                    <h5 class="text-center">Franja horaria Seleccionada: <label>{{ $oportunidad->tiempo }}</label></h5>

                 
                <tr>   
                   <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Todo el día" @if ($oportunidad->tiempo == "Todo el día")
                        checked
                    @endif/> Todo el día </label>
                    </td>

                    <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Mañana" @if ($oportunidad->tiempo == "Medio día: Mañana")
                                    checked
                                @endif /> Medio día: Mañana </label>
                    </td>
                </tr> 
                <tr>
                    <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Tarde" @if ($oportunidad->tiempo == "Medio día: Tarde")
                                    checked
                                @endif/> Medio día: Tarde  </label>
                    </td>

                   <td><label  class="control-label"> <input type="radio" name="tiempo" value="Personalizar horarios" @if ($oportunidad->tiempo == "Personalizar horarios")
                                    checked
                                @endif/> Personalizar horarios </label>
                   </td> 
               </tr> 
                     
            </label>
        </div>
        </table>


                <div class="row">
                <div class="col-md-6">
                 <div class="form-group"> 
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $oportunidad->horaInicioL }}" name="horaInicioL" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $oportunidad->horaFinL }}" name="horaFinL"  /></td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td><input type="time"  value="{{ $oportunidad->horaInicioM }}"  name="horaInicioM" /></td> 
                     <td>a</td>
                     <td><input type="time"   value="{{ $oportunidad->horaFinM }}" name="horaFinM" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $oportunidad->horaInicioMi }}"   name="horaInicioMi" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $oportunidad->horaFinMi }}"  name="horaFinMi" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $oportunidad->horaInicioJ }}"  name="horaInicioJ" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $oportunidad->horaFinJ }}"  name="horaFinJ" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $oportunidad->horaInicioV }}"   name="horaInicioV" /></td>
                     <td>a</td>
                     <td><input type="time" value="{{ $oportunidad->horaFinV }}"  name="horaFinV" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $oportunidad->horaInicioS }}"  name="horaInicioS" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $oportunidad->horaFinS }}"  name="horaFinS" /></td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $oportunidad->horaInicioD }}" " name="horaInicioD" /></td>
                     <td>a</td> 
                     <td><input type="time" value="{{ $oportunidad->horaFinD }}"  name="horaFinD" /></td>
                  </tr> 
                  <p></p>
                   </tbody>
          </table>
                   </div></div></div>
                   
            </div>
        </div>
        
          
    {{-- REMUNERACION --}}

                <div class="form-group"> 
                    <label class="control-label">Remuneracion Ofrecida:</label> 
                <div class="col-md-2">
                           
                     <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="100000.00" step="0.01" placeholder="$" value="{{ $oportunidad->remuneracion }}" />
                </div>
                </div>
   </div>
  
            {{-- Fechas de ingreso y egreso --}}
             <div class="form-group">
        <div class="row">
            <div class="col-md-8"> 
            <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                            
        
                       <td>   <label class="control-label" >Duración: </label> </td>
                        
                        <td><input id="number" type="number" name="numdura"   value="{{ $oportunidad->numdura }}"/>  </td>
                       
                        <td> <select name="duracion"  class="form-control" required>
                                        <option value="Días"  @if ($oportunidad->duracion == "Días") selected
                                                                @endif>Días</option>
                                        <option value="Semanas" @if ($oportunidad->duracion == "Semanas") selected
                                                                @endif>Semanas</option>
                                        <option value="Meses"@if ($oportunidad->duracion == "Meses") selected
                                                                @endif>Meses</option>
                                        <option value="Años"@if ($oportunidad->duracion == "Años") selected
                                                                @endif>Años</option>
                                </select>
                        </td>
                    </tbody>
          </table>
             </div>
            </div>
        </div>
            {{-- SUBMIT --}}
            <br>
         <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar Cambios </button>
            <a  type="button" class="btn btn-primary col-md-offset-8 "  href="{{ url('productor/mostrarOportunidad') }}">Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
        </div>
            {{-- END FORM --}}
         </form>    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
