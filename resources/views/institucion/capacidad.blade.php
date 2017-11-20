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
                <div class="panel-heading "><h3>Bienvenido a Capacidades Laborales</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

     {{-- Inicio FORM --}}
            <form method="POST" action="{{ url('institucion/capacidad') }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
             
            {{--<h2 class="text-center">Capacidad Laboral</h2>--}}

            {{-- TITULO --}}
            <div class="form-group">
                <label class="control-label" for="text-input"> Titulo: <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingrese un titulo acorde a su Capacidad"></span></label>
                <input class="form-control" type="text" name="titulo" id="text-input"  data-toggle="tooltip"  >
            </div>
            
            {{-- Descripcion --}}
            <div class="form-group">
                <label class="control-label" for="email-input"> Descripción:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Describa su capacidad"></span> </label>
                <textarea class="form-control"  name="descripcion" rows="8" cols="40" id="text-input" placeholder=" Escriba aquí una breve descripción de su capacidad laboral.."></textarea>
            </div>
            
                 {{-- PALABRAS CLAVE --}}
        <div class="form-group">
            <div class="row">
                <div class="col-md-10"> <label class="control-label">Palabras Clave:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar 4 palabras diferentes acorde a la capacidad"></span></label>
                <label>(ingrese palabras clave para facilitar la busqueda de su capacidad laboral)</label>
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

        {{-- EXPERIENCIA --}}
            <div class="form-group">
                <label class="control-label" for="textarea-input">Experiencias previas:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Experias adquiridas que aporten a su capacidad"></span></label>
                <textarea class="form-control" name="experiencias" rows="8" cols="40" placeholder=" Mencione sus experiencias laborales..." id="textarea-input"></textarea>
            </div>

             {{-- CATEGORIA --}}
            <div class="row">
                <div class="col-md-4">
                    
              <div class="form-group">
                <label class="control-label" for="textarea-input">Categoria:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Selecionar una categoria o agregar"></span></label>
                        <select name="categoria"  class="form-control" required>
                                <option value="pasante">Pasante</option>
                                <option value="trabajoFinal">Trabajo Final</option>
                               <option value="Otros" 
                               >Otros  
                          </option>
                          </select>
                          <br>

                           <input class="form-control" type="text" name="agregar" id="text-input" placeholder="Agregar mas categorias...">
                    </div>
                </div>
                <div class="col-md-8">
                          {{-- Orientado --}}
                 <div class="form-group">
                <label class="control-label" for="textarea-input">Orientado a:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Especificar a quienes esta orientada la capacidad "></span> </label>
                        <textarea class="form-control"  name="orientacion" id="text-input" placeholder="PYMES, Grupos..."  rows="4" cols="10" ></textarea>
                    </div>
                </div>
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
                   <div class="row">
                 <div class="col-md-8">
                <div class="form-group">
                 Fecha de  finalización:  <input type="date" placeholder="DD" name="fechaFin"/>
                </div></div></div>

            </div>
        </div>
        
          
    {{-- REMUNERACION --}}

                <div class="form-group"> 
                    <label class="control-label">Remuneracion Pretendida:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar el importe que se espera recibir acorde a conocimientos y horarios seleccionados"></span></label> 
                <div class="col-md-2">
                           
                     <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" />
                </div>
                </div>
   </div>
  

       
    {{-- SUBMIT --}}
        <div class="form-group">
            <button class="btn btn-primary " type="submit">Cargar </button>
            <a  type="button" class="btn btn-primary col-md-offset-9 "  href="{{ url('institucion/mostrarCapacidad') }}"> Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
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