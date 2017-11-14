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
                <input class="form-control" type="text" name="titulo" id="text-input"  data-toggle="tooltip" data-original-title="Ingrese un titulo acorde a su Capacidad" >
            </div>
            
            {{-- Descripcion --}}
            <div class="form-group">
                <label class="control-label" for="email-input"> Descripción: </label>
                <textarea class="form-control"  name="propuesta" rows="8" cols="40" id="text-input" placeholder=" Escriba aquí una breve descripción de su capacidad laboral.."></textarea>
            </div>
            
                 {{-- PALABRAS CLAVE --}}
        <div class="form-group">
            <div class="row">
                <div class="col-md-10"> <label class="control-label">Palabras Clave:</label>
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
                <label class="control-label" for="textarea-input">Experiencias previas: </label>
                <textarea class="form-control" name="experiencias" rows="8" cols="40" placeholder=" Mencione sus experiencias laborales..." id="textarea-input"></textarea>
            </div>


            <div class="row">
                <div class="col-md-4">
                     {{-- CATEGORIA --}}
              <div class="form-group">
                <label class="control-label" for="textarea-input">Categoria: </label>
                        <select name="categoria"  class="form-control" required>
                                

                                <option value="pasante">Pasante</option>
                                <option value="trabajoFinal">Trabajo Final</option>
                               <option value="Otros" 
                               >Otros </option>
                          </select>
                          <br>
                           <input class="form-control" type="text" name="agregar" id="text-input" placeholder="Agregar mas categorias...">
                    </div>
                </div>
                <div class="col-md-8">
                          {{-- RUBRO --}}
                 <div class="form-group">
                <label class="control-label" for="textarea-input">Orientado a: </label>
                        <textarea class="form-control"  name="orientacion" id="text-input" placeholder="PYMES, Grupos..."  rows="4" cols="10" ></textarea>
                    </div>
                </div>
            </div>
    {{-- DISPONIBILIDAD --}}
    <div class="row">
        <div class="col-md-8">
            
            <div class="form-group">
                
                <label class="control-label">Disponibilidad Horaria: </label>

                <div class="row">
                <div class="col-md-8 ">
                <div class="form-group">
                Fecha de inicio: <input type="date" placeholder="DD" name="disponibilidad"/>
               
                </div></div></div>
                 

                <div class="row">
                <div class="col-md-6">
                 <div class="form-group"> 
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><label>Lunes</label></td>
                     <td>de</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td>a</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><label>Martes</label></td>
                     <td>de</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td>a</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Miercoles</label></td>
                     <td>de</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td>a</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Jueves</label></td>
                     <td>de</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td>a</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Viernes</label></td>
                     <td>de</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                     <td>a</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><label>Sabado</label></td>
                     <td>de</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td>a</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><label>Domingo</label></td>
                     <td>de</td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                     <td>a</td> 
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                   </tbody>
          </table>
                   </div></div></div>
                   <div class="row">
                 <div class="col-md-8">
                <div class="form-group">
                 Fecha de  finalización: <input type="date" placeholder="DD" name="disponibilidad"/>
                </div></div></div>

            </div>
        </div>
        
          
    {{-- REMUNERACION --}}

                <div class="form-group"> 
                    <label class="control-label">Remuneracion Pretendida:</label> 
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