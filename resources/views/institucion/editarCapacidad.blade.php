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
                    <input class="form-control" type="text" name="titulo" id="text-input"  data-toggle="tooltip" placeholder="Ingresar Título."  value="{{ $capacidad->titulo }}" required>
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
                    <textarea class="form-control"  name="descripcion" rows="4" cols="20" id="text-input" placeholder=" Escriba aquí una breve descripción de su capacidad laboral."  required>{{ $capacidad->descripcion }}</textarea>
                </div>
                <br>
            </div>
            <br><br><br><br>
          
        {{-- EXPERIENCIA --}}
        <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                <label class="control-label" for="textarea-input">Experiencias previas:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Experias adquiridas que aporten a su capacidad"></span></label>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                <textarea class="form-control" name="experiencias" rows="4" cols="40" placeholder=" Mencione sus experiencias laborales." id="textarea-input" required> {{ $capacidad->experiencias }}</textarea>  
            </div>
            <br>
        </div>
        <br><br><br><br>
         {{-- CATEGORIA --}}
         <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
               <label class="control-label" for="textarea-input">Categoría:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar una categoria "></span></label>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                <select name="categoria"  class="form-control" id='categoria-select' required>
                                   <option value="Pasantia" @if ($capacidad->categoria == "Pasantia") selected @endif>Pasantía</option>

                                  <option value="Trabajo Final" @if ($capacidad->categoria == "Trabajo Final") selected @endif>Trabajo Final</option>

                                  <option value="Proyecto" @if ($capacidad->categoria == "Proyecto") selected @endif>Proyecto</option>

                                  <option value="Investigación" @if ($capacidad->categoria == "Investigación") selected @endif>Investigación</option>

                                  <option value="Beca" @if ($capacidad->categoria == "Beca") selected @endif>Beca</option> 

                                  <option value="Otros" @if ($capacidad->categoria == "Otros") selected @endif>-Otros-</option>
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
                                  <option value="Alumno" @if ($capacidad->tipo == "Alumno") selected @endif>Alumno</option>

                                  <option value="Profesor" @if ($capacidad->tipo == "Profesor") selected @endif>Profesor</option>

                                   <option value="Director" @if ($capacidad->tipo == "Director") selected @endif>Director</option>

                                   <option value="Empleado" @if ($capacidad->tipo == "Empleado") selected @endif>Empleado</option>

                                   <option value="Jefe" @if ($capacidad->tipo == "Jefe") selected @endif>Jefe</option>

                                   <option value="Supervisor" @if ($capacidad->tipo == "Supervisor") selected @endif>Supervisor</option>
                                  
                                  <option value="Otros"  @if ($capacidad->tipo == "Otros") selected @endif>-Otros-</option>
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
                                  <option value="Instituciones" @if ($capacidad->tipo == "Instituciones") selected @endif>Instituciones</option>

                                  <option value="Empresas" @if ($capacidad->orientacion == "Empresas") selected @endif>Empresas</option>

                                   <option value="Pymes" @if ($capacidad->orientacion == "Pymes") selected @endif>Pymes</option>

                                   <option value="Organización" @if ($capacidad->orientacion == "Organización") selected @endif>Organización</option>

                                   <option value="Grupos" @if ($capacidad->orientacion == "Grupos") selected @endif>Grupos</option>
                                  
                                  <option value="Otros"  @if ($capacidad->orientacion == "Otros") selected @endif>-Otros-</option>

                    </select>  
                  
                   <input class="form-control" type="text" name="horientacion" disabled="true" id="horientacion" placeholder="">
                </div>
                <br>
            </div>
 <br><br> <br>

        {{-- PERSONAL --}}
         <div class="form-group">       
                <div class="col-md-2 col-md-offset-0 col-sm-6 label-column">   
                    <label class="control-label" for="textarea-input">Cantidad de vacantes:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Personas con esta capacidad adquirida"></span></label>
                </div>
                 <div class="col-md-2 col-md-offset-0 col-sm-6 input-column">
                    <input class="form-control"  type="number"  name="personal" step="1" min="0" max="1000000" placeholder="N° personal." value="{{ $capacidad->personal }}" required/>
                </div>
        </div>
        <br><br>
         {{-- REMUNERACION --}}                    
       <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-6 label-column">
                <label class="control-label">Remuneración pretendida:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar el importe que se espera recibir acorde a conocimientos y horarios seleccionados"></span></label> 
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-6 input-column">
               <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" value="{{ $capacidad->remuneracion }}" required/>
            </div>
        </div> 
        <br><br>
             
 {{-- Lugar --}}
         <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
               <label class="control-label" for="textarea-input">Lugar de Trabajo:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Selecionar una categoria o agregar"></span></label>
            </div>

        <div class="row">
            <div class="col-md-3">
              <input class="form-control" type="text" name="provincia" id="text-input" placeholder="Provincia." value="{{ $capacidad->provincia }}"  required>
            </div>
            <div class="col-md-3">
               <input class="form-control" type="text" name="localidad" id="text-input" placeholder="Localidad." value="{{ $capacidad->localidad }}"  required>
            </div>
        </div>
        </div>  <br>
    {{-- DISPONIBILIDAD --}}
 <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
               <label class="control-label">Día y Horario de Trabajo:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Cargar los horarios disponibles "></span></label>
                <br>
            </div>
            
  
        <div class="col-md-8 col-md-3 col-md-offset-0 col-sm-4 label-column">          
            <div class="form-group">         
                
<div class="row">
                    
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group">
                        Fecha de inicio:  <input type="date"  id="start" " name="fechaInicio" value="{{date_create_from_format('d/m/Y',$capacidad->fechaInicio)->format('Y-m-d')}}" required/>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                         Fecha de  finalización:  <input type="date" id="end" name="fechaFin" value="{{date_create_from_format('d/m/Y',$capacidad->fechaFin)->format('Y-m-d')}}" required/>
                        </div>
                    </div>

                </div>
        
                <div class="row">
                <div class="col-md-7">
                 <div class="form-group"> 
                    <div class="checkbox">   
                         <label class="control-label">
                           <td> <label  class="control-label"> <input {{-- checked --}} type="radio" name="tiempo" value="Todo el día" id="full" @if ($capacidad->tiempo == "Todo el día") checked @endif required/>Todo el día</label> </td><br>

                            <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Mañana" id="manana"  @if ($capacidad->tiempo == "Medio día: Mañana") checked @endif required/> Medio día: Mañana </label></td><br>

                            <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Tarde" id="tarde" @if ($capacidad->tiempo == "Medio día: Tarde") checked @endif required/> Medio día: Tarde  </label></td>         
                     </label>
                    </div>
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioL }}" name="horaInicioL"  class="clasedesde" id="lunstart1" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinL }}" name="horaFinL"  class="clasehasta" id="lunend1" /></td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td><input type="time"  value="{{ $capacidad->horaInicioM }}"  name=" horaInicioM"   class="clasedesde" id="lunstart2"/></td> 
                     <td>a</td>
                     <td><input type="time"   value="{{ $capacidad->horaFinM }}" name="horaFinM" class="clasehasta" id="lunend2" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioMi }}"   name="horaInicioMi"  class="clasedesde" id="lunstart3" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinMi }}"  name="horaFinMi"  class="clasehasta" id="lunend3"/></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioJ }}"  name="horaInicioJ" class="clasedesde"  id="lunstart4"/></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinJ }}"  name="horaFinJ" class="clasehasta" id="lunend4"/></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioV }}"   name="horaInicioV"  class="clasedesde" id="lunstart5" /></td>
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinV }}"  name="horaFinV" class="clasehasta" id="lunend5"/></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioS }}"  name="horaInicioS"  class="clasedesde" id="lunstart6" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinS }}"  name="horaFinS" class="clasehasta" id="lunend6"/></td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioD }}" " name="horaInicioD"  class="clasedesde" id="lunstart7" /></td>
                     <td>a</td> 
                     <td><input type="time" value="{{ $capacidad->horaFinD }}"  name="horaFinD" class="clasehasta" id="lunend7"/></td>
                  </tr> 
                  <p></p>
                   </tbody>
          </table>
                   </div></div></div>

            </div>
        </div>

   
 </div>

 <div class="form-group">
            <div class="row">
               
                <div class="col-md-12"> <label class="control-label">Palabras Clave:</label>
                <label>(palabras clave para facilitar la busqueda de su capacidad laboral)</label>
                </div>
                 @foreach($capacidad->keywords as $key)
                <div class="col-md-3">
                    <input name="palabra" type="text" class="form-control" required value="{{ $key->palabra }}"  disabled />
                </div>
                
                  @endforeach
            </div>
        </div>  
              
      {{-- PALABRAS CLAVE 
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
--}}
       
    {{-- SUBMIT --}}
        <div class="form-group">
            <a  type="button"  class="btn btn-primary btn-lg" href="{{ url('institucion/mostrarCapacidad') }}"   ><h4> <i class=" glyphicon glyphicon-arrow-left"></i> Volver </h4></a>

            <button class=" btn btn-success btn-lg col-md-offset-9 "  type="submit"><h4>Cargar</h4> </button>

           </div>
        {{-- END FORM --}}
    </form> 
    
     <script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

        
          //-------------- Horarios Predeterminado
              $('#full').change(function(){

              $(".clasedesde").val('06:00');
              $(".clasehasta").val('23:00');
             })

              $('#manana').change(function(){

              $(".clasedesde").val('06:00');
              $(".clasehasta").val('14:00');
             })

              $('#tarde').change(function(){

              $(".clasedesde").val('14:00');
              $(".clasehasta").val('23:00');
             })

            //--------------Valida Fecha  \
              var start = document.getElementById('start');
              var end = document.getElementById('end');
              end.min = start.value;
              start.max = end.value;
              start.addEventListener('change', function() {
                  if (start.value)
                 end.min = start.value;
              }, false);
                  end.addEventListener('change', function() {
                  if (end.value)
              start.max = end.value;
              }, false);

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