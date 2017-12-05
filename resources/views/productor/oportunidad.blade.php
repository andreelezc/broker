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
        <form method="POST" action="{{ url('productor/oportunidad') }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
            {{--<h2 class="text-center">Oportunidad Laboral</h2>--}}

            {{-- Titulo--}}
            <div class="form-group">
                <label class="control-label" for="text-input" > Título : <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingrese un titulo acorde a su Oportunidad"></span></label>
                <input class="form-control" type="text" name="titulo" id="text-input">
            </div>
           {{-- Descripcion --}}
            <div class="form-group">
                <label class="control-label" for="email-input"> Descripción:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Describa su Oportunidad"></span> </label>
                <textarea class="form-control"  name="descripcion" rows="8" cols="40" id="text-input" placeholder=" Escriba aquí una breve descripción de oportunidad laboral ofrecida."></textarea>
            </div>
            {{-- PALABRAS CLAVE --}}
        <div class="form-group">
            <div class="row">
                <div class="col-md-12"> <label class="control-label">Palabras Clave:</label>
                <label>(ingrese palabras clave para facilitar la busqueda de su oportunidad  laboral)</label>
                </div>
                <div class="col-md-3">
                    <input name="key1" type="text" class="form-control" required />
                </div>
                <div class="col-md-3">
                    <input name="key2" type="text" class="form-control" required />
                </div>
                <div class="col-md-3">
                    <input name="key3" type="text" class="form-control" required />
                </div>
                <div class="col-md-3">
                    <input name="key4" type="text" class="form-control" required/>
                </div>
            </div>
        </div>  
            {{-- Requsitos --}}
            <div class="form-group">
                <label class="control-label" for="textarea-input">Requisitos:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Requisitos que los postulantes deben cumplir"></span></label>
                <textarea class="form-control" name="requisito" rows="8" cols="40" placeholder=" Mencione requisitos laborales..." id="textarea-input"></textarea>
            </div>
       
        {{-- DISPONIBILIDAD --}}
   <div class="row">
        <div class="col-md-8">          
            <div class="form-group">         
                <label class="control-label">Disponibilidad Horaria:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Cargar los horarios disponibles "></span></label>
                <div class="row">
                <div class="col-md-8 ">
                <div class="form-group">
                Fecha de inicio:  <input type="date" placeholder="DD" name="fechaInicio"/>

                <div class="checkbox">   
                    <label class="control-label">
                            <label  class="control-label"> <input type="radio" name="movimiento" value="full" /> Todo el día     </label> 
                            <label  class="control-label"> <input type="radio" name="movimiento" value="manana" /> Medio día: Mañana </label>
                            <label  class="control-label"> <input type="radio" name="movimiento" value="tarde" /> Medio día: Tarde  </label>
                            <label  class="control-label"> <input type="radio" name="movimiento" value="personalizar" /> Personalizar horario  </label>
                    </label>
                </div>
                </div></div></div>

                <div class="row">
                <div class="col-md-6">
                 <div class="form-group"> 
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00" name="horaInicioL" /></td> 
                     <td>a</td>
                     <td><input type="time" value="00:00" name="horaFinL"  /></td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td><input type="time"  value="00:00"  name="horaInicioM" /></td> 
                     <td>a</td>
                     <td><input type="time"   value="00:00" name="horaFinM" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00"   name="horaInicioMi" /></td> 
                     <td>a</td>
                     <td><input type="time" value="00:00"  name="horaFinMi" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00"  name="horaInicioJ" /></td> 
                     <td>a</td>
                     <td><input type="time" value="00:00"  name="horaFinJ" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00"   name="horaInicioV" /></td>
                     <td>a</td>
                     <td><input type="time" value="00:00"  name="horaFinV" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00"  name="horaInicioS" /></td> 
                     <td>a</td>
                     <td><input type="time" value="00:00"  name="horaFinS" /></td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00" " name="horaInicioD" /></td>
                     <td>a</td> 
                     <td><input type="time" value="00:00"  name="horaFinD" /></td>
                  </tr> 
                  <p></p>
                   </tbody>
                 </table>
                   </div></div></div>
                   
            </div>
        </div>
        
          
    {{-- REMUNERACION --}}

                <div class="form-group"> 
                    <label class="control-label">Remuneración Ofrecida: <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Especificar la remuneracion ofrecida"></span></label> 
                <div class="col-md-2">
                           
                     <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" />
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
        
                       <td>   <label class="control-label" >Duración: <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Indicar la duracion de la oportunidad "></span></label> </td>
                        
                        <td><input id="number" type="number" name="numdura" />  </td>
                       
                        <td> <select name="duracion"  class="form-control" required>
                                        <option value="Días">Días</option>
                                        <option value="Semanas">Semanas</option>
                                        <option value="Meses">Meses</option>
                                        <option value="Años">Años</option>
                                </select>  </td>
                                       </tbody>
          </table>
             </div>
            </div>
        </div>
            {{-- SUBMIT --}}
            <br>
       

         <div class="form-group">
            <a  type="button"  class="btn btn-primary btn-lg" href="{{ url('productor/mostrarOportunidad') }}"   ><h4> <i class=" glyphicon glyphicon-arrow-left"></i> Volver </h4></a>

            <button class=" btn btn-success btn-lg col-md-offset-9 "  type="submit"><h4>Cargar</h4> </button>

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
