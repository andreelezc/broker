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
                <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                    <label class="control-label" for="text-input"> Título: <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingrese un titulo acorde a su Capacidad"></span></label>
                </div>
                <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                    <input class="form-control" type="text" name="titulo" id="text-input"  data-toggle="tooltip" placeholder="Ingresar Título" >
                </div>
                <br>
            </div>
            <br>

            {{-- Descripcion --}}
           <div class="form-group">
                <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                    <label class="control-label" for="text-input"> Descripción:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Describa su capacidad"></span> </label>
                </div>
                <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                    <textarea class="form-control"  name="descripcion" rows="8" cols="40" id="text-input" placeholder=" Escriba aquí una breve descripción de su capacidad laboral.."></textarea>
                </div>
                <br>
            </div>
            <br><br><br><br><br><br><br><br>
          
        {{-- EXPERIENCIA --}}
        <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                <label class="control-label" for="textarea-input">Experiencias previas:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Experias adquiridas que aporten a su capacidad"></span></label>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                <textarea class="form-control" name="experiencias" rows="8" cols="40" placeholder=" Mencione sus experiencias laborales..." id="textarea-input"></textarea>  
            </div>
            <br>
        </div>
        <br><br><br><br><br><br><br><br>
         {{-- CATEGORIA --}}
         <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
               <label class="control-label" for="textarea-input">Categoría:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Selecionar una categoria o agregar"></span></label>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                <input class="form-control" type="text" name="categoria" id="text-input" placeholder="Pasante, Trabajo Final, Becas...">
            </div>
            <br>
        </div>
        <br>


        {{-- PERSONAL --}}
         <div class="form-group">       
                <div class="col-md-4 col-md-offset-0 col-sm-4 label-column">   
                    <label class="control-label" for="textarea-input">Cantidad de personal vacante:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Personas con esta capacidad adquirida"></span></label>
                </div>
                 <div class="col-md-2 col-md-offset-0 col-sm-6 input-column">
                    <input class="form-control"  type="number"  name="personal" step="1" min="0" max="1000000" placeholder="N° personal"/>
                </div>
        </div>
        
         {{-- REMUNERACION --}}                    
       <div class="form-group">
            <div class="col-md-3 col-md-offset-0 col-sm-4 label-column">
                <label class="control-label">Remuneración pretendida:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar el importe que se espera recibir acorde a conocimientos y horarios seleccionados"></span></label> 
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-6 input-column">
               <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" />
            </div>
        </div> 
        <br><br>
         {{-- Orientado --}}
         <div class="form-group">
                <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                   <label class="control-label" for="textarea-input">Orientado a:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Especificar a quienes esta orientada la capacidad "></span> </label>
                </div>
                <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                   <textarea class="form-control"  name="orientacion" id="text-input" placeholder="PYMES, Grupos, Empresas, Instituciones ..."  rows="5" cols="12" ></textarea>
                </div>
                <br>
            </div>

            <br>
<br> <br><br> <br>
                    
          {{-- PALABRAS CLAVE --}}
        <div class="form-group">
            <div class="row">
                <div class="col-md-10"> <label class="control-label">Palabras clave:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar 4 palabras diferentes acorde a la capacidad"></span></label>
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

      

    {{-- DISPONIBILIDAD --}}
    <div class="row">
        <div class="col-md-8">          
            <div class="form-group">         
                <label class="control-label">Disponibilidad Horária:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Cargar los horarios disponibles "></span></label>
                <br>

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
                
        <table class="table table-user-information">
        <div class="checkbox">   
            <label class="control-label">
                 <tbody> 
                  <tr>   
                   <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Todo el día" /> Todo el día     </label> </td>
                    <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Mañana" /> Medio día: Mañana </label></td>
                    </tr> 
                    <tr>
                    <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Tarde" /> Medio día: Tarde  </label></td>
                   <td>  <label  class="control-label"> <input type="radio" name="tiempo" value="Personalizar horarios" /> Personalizar horarios </label></td> </tr> 
                     
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


              
     
          
    {{-- REMUNERACION 

                <div class="form-group"> 
                    <label class="control-label">Remuneración pretendida:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar el importe que se espera recibir acorde a conocimientos y horarios seleccionados"></span></label> 
                <div class="col-md-2">
                           
                     <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" />
                </div>
                </div>--}}
   </div>
  

       
    {{-- SUBMIT --}}
        <div class="form-group">
            <a  type="button"  class="btn btn-primary btn-lg" href="{{ url('institucion/mostrarCapacidad') }}"   ><h4> <i class=" glyphicon glyphicon-arrow-left"></i> Volver </h4></a>

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