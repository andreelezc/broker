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
                    <input class="form-control" type="text" name="titulo" id="text-input"  data-toggle="tooltip" placeholder="Ingresar Título." required >
                </div>
            </div>
            <br><br> <br>
           
           {{-- Descripcion --}}
            <div class="form-group">
                <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                    <label class="control-label" for="text-input"> Descripción:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Describa su capacidad"></span> </label>
                </div>
                <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                    <textarea class="form-control"  name="descripcion" maxlength="190"  rows="4" cols="20" id="text-input" placeholder=" Escriba aquí una breve descripción de su capacidad laboral." required></textarea>
                </div>
            </div>
            <br><br> <br><br><br>
            
            {{-- Requsitos --}}
        <div class="form-group">
            <div class="col-md-2 col-md-offset-0 col-sm-2 label-column">
                <label class="control-label" for="textarea-input">Requisitos:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Requisitos que los postulantes deben cumplir"></span></label>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-6 input-column">
                <textarea class="form-control" name="requisito" rows="4" cols="40" placeholder=" Mencione los requisitos." id="textarea-input" required></textarea>  
            </div>
        </div>
        <br><br> <br><br><br>
         

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
               <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" required/>
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
              <input class="form-control" type="text" name="provincia" id="text-input" placeholder="Provincia." required>
            </div>
            <div class="col-md-3">
               <input class="form-control" type="text" name="localidad" id="text-input" placeholder="Localidad." required>
            </div>
        </div>
        </div> 
        <br>
       
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
                        Fecha de inicio:  <input type="date" min= "2018-01-01" id="start" placeholder="DD" name="fechaInicio" required/>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                         Fecha de  finalización:  <input type="date" id="end" placeholder="DD" name="fechaFin" required/>
                        </div>
                    </div>

                </div>
        
                <div class="row">
                <div class="col-md-6">
                 <div class="form-group"> 
                    <div class="checkbox">   
                         <label class="control-label">
                        
                           <td> <label  class="control-label"> <input {{-- checked --}} type="radio" name="tiempo" value="Todo el día" id="full" required/> Todo el día     </label> </td>
                            <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Mañana" id="manana" required/> Medio día: Mañana </label></td>
                            <td> <label  class="control-label"> <input type="radio" name="tiempo" value="Medio día: Tarde" id="tarde" required/> Medio día: Tarde  </label></td> 
                     </label>
                    </div>
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00" name="horaInicioL"  class="clasedesde" id="lunstart1" /></td> 
                     <td>a</td>
                     <td><input type="time" value="00:00" name="horaFinL"  class="clasehasta" id="lunend1" /></td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td><input type="time"  value="00:00"  name=" horaInicioM"   class="clasedesde" id="lunstart2"/></td> 
                     <td>a</td>
                     <td><input type="time"   value="00:00" name="horaFinM" class="clasehasta" id="lunend2" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00"   name="horaInicioMi"  class="clasedesde" id="lunstart3" /></td> 
                     <td>a</td>
                     <td><input type="time" value="00:00"  name="horaFinMi"  class="clasehasta" id="lunend3"/></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00"  name="horaInicioJ" class="clasedesde"  id="lunstart4"/></td> 
                     <td>a</td>
                     <td><input type="time" value="00:00"  name="horaFinJ" class="clasehasta" id="lunend4"/></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00"   name="horaInicioV"  class="clasedesde" id="lunstart5" /></td>
                     <td>a</td>
                     <td><input type="time" value="00:00"  name="horaFinV" class="clasehasta" id="lunend5"/></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00"  name="horaInicioS"  class="clasedesde" id="lunstart6" /></td> 
                     <td>a</td>
                     <td><input type="time" value="00:00"  name="horaFinS" class="clasehasta" id="lunend6"/></td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td><input type="time" value="00:00" " name="horaInicioD"  class="clasedesde" id="lunstart7" /></td>
                     <td>a</td> 
                     <td><input type="time" value="00:00"  name="horaFinD" class="clasehasta" id="lunend7"/></td>
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
                        
                        <td><input id="number" type="number" name="numdura" required />  </td>
                       
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
