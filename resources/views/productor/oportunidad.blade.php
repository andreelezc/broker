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
                <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                    <label class="control-label" for="text-input"> Título: <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingrese un titulo acorde a su Capacidad"></span></label>
                </div>
                <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                    <input class="form-control" type="text" name="titulo" id="text-input"  data-toggle="tooltip" placeholder="Ingresar Título." >
                </div>
            </div>
            <br><br> <br>
           
           {{-- Descripcion --}}
            <div class="form-group">
                <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                    <label class="control-label" for="text-input"> Descripción:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Describa su capacidad"></span> </label>
                </div>
                <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                    <textarea class="form-control"  name="descripcion" rows="4" cols="20" id="text-input" placeholder=" Escriba aquí una breve descripción de su capacidad laboral."></textarea>
                </div>
            </div>
            <br><br> <br><br><br>
            
            {{-- Requsitos --}}
        <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                <label class="control-label" for="textarea-input">Requisitos:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Requisitos que los postulantes deben cumplir"></span></label>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                <textarea class="form-control" name="requisito" rows="4" cols="40" placeholder=" Mencione los requisitos." id="textarea-input"></textarea>  
            </div>
        </div>
        <br><br> <br><br><br>
         {{-- CATEGORIA --}}
         <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
               <label class="control-label" for="textarea-input">Categoría:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar una categoria "></span></label>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                <select name="categoria"  class="form-control" id='categoria-select' required>
                                  <option value="Pasantia">Pasantia</option>
                                  <option value="Trabajo Final">Trabajo Final</option>
                                  <option value="Proyecto">Proyecto</option>
                                  <option value="Investigación">Investigación</option>
                                  <option value="Beca">Beca</option> 
                                  <option value="Otros" >-Otros-</option>
                </select> 
                
                <input class="form-control" type="text" name="category" disabled="true" id="category"  placeholder="">
            </div>
            <br><br>
        </div>
        <br><br>
{{-- Personal --}}
         <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
               <label class="control-label" for="textarea-input">Tipo de Personal:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar rango del personal"></span></label>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                <select name="tipo"  class="form-control" id='tipo-select' required>
                                  <option value="Alumno">Alumno</option>
                                  <option value="Profesor">Profesor</option>
                                  <option value="Director">Director</option>
                                  <option value="Empleado">Empleado</option>
                                  <option value="Jefe">Jefe</option>
                                  <option value="Supervisor">Supervisor</option>
                                  <option value="Otros" >-Otros-</option>
                </select> 
                <input class="form-control" type="text" name="typo" disabled="true" id="typo" placeholder="">
            </div>
           <br>

        </div>
<br><br><br>
        {{-- Orientado --}}
         <div class="form-group">
                <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                   <label class="control-label" for="textarea-input">Orientado a:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Especificar a quienes esta orientada la capacidad "></span> </label>
                </div>
                <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                    <select name="orientacion"  class="form-control" id='orientacion-select' required>
                                  <option value="Instituciones">Instituciones</option>
                                  <option value="Empresas">Empresas</option>
                                  <option value="Pymes">Pymes</option>
                                  <option value="Organización">Organización</option>
                                  <option value="Grupos">Grupos</option>
                                  <option value="Otros" >-Otros-</option>
                    </select>  
                  
                   <input class="form-control" type="text" name="horientacion" disabled="true" id="horientacion" placeholder="">
                </div>
                <br>
            </div>
              
        </div>
            <br><br> 
        {{-- PERSONAL --}}
         <div class="form-group">       
                <div class="col-md-2 col-md-offset-0 col-sm-6 label-column">   
                    <label class="control-label" for="textarea-input">Cantidad de vacantes:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Personas requeridas para la oportunidad"></span></label>
                </div>
                 <div class="col-md-2 col-md-offset-0 col-sm-6 input-column">
                    <input class="form-control"  type="number"  name="personal" step="1" min="0" max="1000000" placeholder="N° personal."/>
                </div>
        </div>
        <br><br>
        {{-- REMUNERACION --}}                    
       <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-6 label-column">
                <label class="control-label">Remuneración:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar el importe que se ofrece al puesto"></span></label> 
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-6 input-column">
               <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" />
            </div>
        </div> 
        <br><br>
 {{-- Lugar --}}
        <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
               <label class="control-label" for="textarea-input">Lugar de Trabajo:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title=" lugar donde se desea desempeñar la oportunidad"></span></label>
            </div>
            <div class="col-md-6 col-md-offset-0 col-sm-5 input-column">
                <input class="form-control" type="text" name="lugar" id="text-input" placeholder=" Ingresar Lugar donde se desea desempeñar.">
            </div>
        </div>
        <br><br>
       
           {{-- DISPONIBILIDAD --}}
 <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
               <label class="control-label">Día y Horario de Trabajo:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Cargar los horarios disponibles "></span></label>
                <br>
            </div>
            
  
        <div class="col-md-8 col-md-3 col-md-offset-0 col-sm-4 label-column">          
            <div class="form-group">         
                

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group">
                        Fecha de inicio:  <input type="date" placeholder="DD" name="fechaInicio"/>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                         Fecha de  finalización:  <input type="date" placeholder="DD" name="fechaFin"/>
                        </div>
                    </div>

                </div>
        
                <div class="row">
                <div class="col-md-6">
                 <div class="form-group"> 
                    <div class="checkbox">   
                         <label class="control-label">
                        
                           <td> <label  class="control-label   "> <input checked type="radio" name="tiempo" value="Todo el día" /> Todo el día     </label> </td>
                            <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Mañana" /> Medio día: Mañana </label></td>
                            <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Tarde" /> Medio día: Tarde  </label></td>   
                     </label>
                    </div>
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
        
           {{--Duración--}}
      <div class="form-group">
        <div class="row">
            <div class="col-md-8"> 
            <table class="table table-user-information">   
                  <tbody> 
                  <tr>              
        
                       <td>   Duración: </td>
                        
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
            </div>
        </div>

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
 {{-- SUBMIT --}}
         <div class="form-group">
            <a  type="button"  class="btn btn-primary btn-lg" href="{{ url('productor/mostrarOportunidad') }}"   ><h4> <i class=" glyphicon glyphicon-arrow-left"></i> Volver </h4></a>

            <button class=" btn btn-success btn-lg col-md-offset-9 "  type="submit"><h4>Cargar</h4> </button>

           </div>
            {{-- END FORM --}}
         </form>    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        
        $(document).ready(function(){

            //--------------categoria
              $('#categoria-select').change(function(){

                if($(this).val() == 'Otros'){
                    $('#category').removeAttr("disabled")
                }else{
                    $('#category').attr("disabled",'true').attr('name','category')
                  $(this).attr('name','categoria')
                }
            })
              $('#category').change(function(){
                  $('#categoria-select').attr('name','category')
                  $(this).attr('name','categoria')
             })

             //--------------tipo
              $('#tipo-select').change(function(){

                if($(this).val() == 'Otros'){
                    $('#typo').removeAttr("disabled")
                }else{
                    $('#typo').attr("disabled",'true').attr('name','typo')
                  $(this).attr('name','tipo')
                }
            })
              $('#typo').change(function(){
                  $('#tipo-select').attr('name','typo')
                  $(this).attr('name','tipo')
             })

              //--------------orientacion

            $('#orientacion-select').change(function(){

                if($(this).val() == 'Otros'){
                    $('#horientacion').removeAttr("disabled")
                }else{
                    $('#horientacion').attr("disabled",'true').attr('name','horientacion')
                  $(this).attr('name','orientacion')
                }
            })

             $('#horientacion').change(function(){
                  $('#orientacion-select').attr('name','horientacion')
                  $(this).attr('name','orientacion')
             })



        })
    </script>
    
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
