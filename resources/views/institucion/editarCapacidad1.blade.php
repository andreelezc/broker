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
                <div class="panel-heading "><h3>Bienvenido al Editor de Capacidades Laborales</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

     {{-- Inicio FORM --}}
            <form method="POST" action="{{ url('institucion/capacidad/editar/'.$capacidad->id) }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
             {{ method_field('PUT') }}
             
            {{--<h2 class="text-center">Capacidad Laboral</h2>--}}

            {{-- TITULO --}}
            <div class="form-group">
                <label class="control-label" for="text-input"> Titulo: <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingrese un titulo acorde a su Capacidad"></span></label>
                <input class="form-control" type="text" name="titulo" id="text-input"  data-toggle="tooltip"  value="{{ $capacidad->titulo }}">
            </div>
            
            {{-- Descripcion --}}
            <div class="form-group">
                <label class="control-label" for="email-input"> Descripción:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Describa su capacidad"></span> </label>
                <textarea class="form-control"  name="descripcion" rows="8" cols="40" id="text-input" placeholder=" Escriba aquí una breve descripción de su capacidad laboral.."> {{ $capacidad->descripcion }}</textarea>
            </div>
            
                 {{-- PALABRAS CLAVE --}}
         <div class="form-group">
            <div class="row">
                <div class="col-md-12"> <label class="control-label">Palabras Clave:</label>
                <label>(ingrese palabras clave para facilitar la busqueda de su capacidad laboral)</label>
                </div>
                 @foreach($capacidad->keywords as $key)
                <div class="col-md-3">
                    <input name="palabra" type="text" class="form-control" required  value=" {{ $key->palabra }}"  disabled />
                </div>
                @endforeach
            </div>
        </div> 

        {{-- EXPERIENCIA --}}
            <div class="form-group">
                <label class="control-label" for="textarea-input">Experiencias previas:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Experias adquiridas que aporten a su capacidad"></span></label>
                <textarea class="form-control" name="experiencias" rows="8" cols="40" placeholder=" Mencione sus experiencias laborales..." id="textarea-input">{{ $capacidad->experiencias }}</textarea>
            </div>

             {{-- CATEGORIA --}}
            <div class="row">
                <div class="col-md-4">
                    
              <div class="form-group">
                <label class="control-label" for="textarea-input">Categoria:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Selecionar una categoria o agregar"></span></label>
                        <select name="categoria"  class="form-control" required>
                                <option value="pasante" 
                                @if ($capacidad->categoria == "pasante")
                                    selected
                                @endif
                                >Pasante</option>
                                <option value="encargado"
                                @if ($capacidad->categoria == "trabajoFinal")
                                    selected
                                @endif
                                >Trabajo Final</option>
                                <option value="estudiante"
                                @if ($capacidad->categoria == "Otos")
                                    selected
                                @endif
                                >Otros</option>
                          </select>
                          <br>

                           <input class="form-control" type="text" name="agregar" id="text-input" placeholder="Agregar mas categorias...">
              </div>
                </div>
                 {{-- Orientado --}}
                <div class="col-md-8">         
                 <div class="form-group">
                <label class="control-label" for="textarea-input">Orientado a:  <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Especificar a quienes esta orientada la capacidad "></span> </label>
                        <textarea class="form-control"  name="orientacion" id="text-input" placeholder="PYMES, Grupos..."  rows="4" cols="10" >{{ $capacidad->orientacion }}</textarea>
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
                Fecha de inicio:  <input type="date" placeholder="DD" name="fechaInicio" value="{{ $capacidad->fechaInicio }}" />
               
                </div></div></div>
                
                <div class="row">
                <div class="col-md-6">
                 <div class="form-group"> 
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioL }}" name="horaInicioL" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinL }}" name="horaFinL"  /></td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td><input type="time"  value="{{ $capacidad->horaInicioM }}"  name="horaInicioM" /></td> 
                     <td>a</td>
                     <td><input type="time"   value="{{ $capacidad->horaFinM }}" name="horaFinM" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioMi }}"   name="horaInicioMi" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinMi }}"  name="horaFinMi" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioJ }}"  name="horaInicioJ" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinJ }}"  name="horaFinJ" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioV }}"   name="horaInicioV" /></td>
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinV }}"  name="horaFinV" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioS }}"  name="horaInicioS" /></td> 
                     <td>a</td>
                     <td><input type="time" value="{{ $capacidad->horaFinS }}"  name="horaFinS" /></td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td><input type="time" value="{{ $capacidad->horaInicioD }}" " name="horaInicioD" /></td>
                     <td>a</td> 
                     <td><input type="time" value="{{ $capacidad->horaFinD }}"  name="horaFinD" /></td>
                  </tr> 
                  <p></p>
                   </tbody>
          </table>
                   </div></div></div>
                   <div class="row">
                 <div class="col-md-8">
                <div class="form-group">
                 Fecha de  finalización:  <input type="date" placeholder="DD" name="fechaFin" value="{{ $capacidad->fechaFin }}"/>
                </div></div></div>

            </div>
        </div>
    
        
          
    {{-- REMUNERACION --}}

                <div class="form-group"> 
                    <label class="control-label">Remuneracion Pretendida:   <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Ingresar el importe que se espera recibir acorde a conocimientos y horarios seleccionados"></span></label> 
                <div class="col-md-2">
                           
                     <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" value="{{ $capacidad->remuneracion }}" />
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