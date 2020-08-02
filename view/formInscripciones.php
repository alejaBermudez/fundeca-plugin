<?php

if(!defined('ABSPATH')) exit; 
 
 /**
 * Shortcode para la historia: Inscripcion del proyecto
 * USO: [fundeca_form_inscripciones]
 */

add_shortcode('fundeca_form_inscripciones', 'fundeca_form_inscripciones');
 
function fundeca_form_inscripciones(){     
   
    ?>

<link rel="stylesheet" href="http://localhost/fundeca/wp-content/plugins/fundeca-plugin/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/fundeca/wp-content/plugins/fundeca-plugin/assets/css/fundeca.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="http://localhost/fundeca/wp-content/plugins/fundeca-plugin/assets/js/ges_proyecto.js"></script>

<div>
    <fieldset style="border:2px solid;    -moz-border-radius:8px;   -webkit-border-radius:8px;   border-radius:8px;">   
        <form >            
            <legend > Identificación del proyecto </legend> 
            
            <div class="form-row align-items-left">                    
                <div class="col-sm-3"> <!--codigo-->
                    <label for="codigo" class="col-sm-4 col-form-label">Código:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  style="width:100%" id="codigo">
                    </div>                        
                </div>          
                <div class="col-sm-3"><!--municipio-->
                    <label for="municipio" class="col-sm-6 col-form-label">Municipio:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" style="width:100%" id="municipio">
                    </div>                        
                </div>          
                <div class="col-sm-3"><!--sede-->
                    <label for="sede" class="col-sm-6 col-form-label">Sede:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" style="width:100%" id="sede">
                    </div>                        
                </div>            
                <div class="col-sm-3"><!--zona-->
                    <label for="zona" class="col-sm-6 col-form-label">Zona:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" style="width:100%" id="zona">
                    </div>                        
                </div>
            </div> 
            <label ></label>
            <div class="form-row align-items-left">                    
                <div class="col-sm-3"><!--instEducativa-->
                    <label for="InstEd" >Inst. educativa:</label>                                                
                </div>          
                <div class="col-sm-3"><!--select-->             
                        <input type="text" class="form-control" style="width:100%" id="InstEd">                                            
                </div>          
                <div class="col-sm-3"><!--asesor-->
                    <label for="asesor" >Asesor:</label>                                              
                </div>            
                <div class="col-sm-3"><!--input-->    
                        <input type="text" class="form-control" style="width:100%" id="asesor">                                      
                </div>
            </div> 
            <label ></label>
            <div class="form-row align-items-left">                    
                <div class="col-sm-3"><!--linea-->
                    <label for="linea">Línea de investigación:</label>                                               
                </div>          
                <div class="col-sm-3"> <!--select-->
                    <select class="custom-select mr-sm-2" id="linea" style="width:100%">
                        <option selected>Seleccione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>          
                <div class="col-sm-3"><!--etapa-->
                    <label for="etapa" class="col-sm-6 col-form-label">Etapa del proyecto:</label>
                    <div class="col-sm-6">
                        <select class="custom-select mr-sm-2" id="etapa" style="width:100%">
                            <option selected>Seleccione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>                        
                </div>            
                <div class="col-sm-3"><!--anio-->
                    <label for="anio" class="col-sm-6 col-form-label">Año:</label>
                    <div class="col-sm-6">
                    <select class="custom-select mr-sm-2" id="anio" style="width:100%">
                            <option selected>Seleccione</option>
                            <option value="1">Año 1</option>
                            <option value="2">Año 2</option>
                            <option value="3">Año 3</option>
                        </select>
                    </div>                        
                </div>
            </div> 
            <label ></label>
            <div class="form-row align-items-left">                    
                <div class="col-sm-3"><!--numEstudiantesGrupo-->
                    <label for="numEst" >Número de estudiantes por grupo:</label>                                                
                </div>          
                <div class="col-sm-3">  <!--input-->                    
                        <input type="number" style="width:50%" class="form-control" id="numEst">                                            
                </div>          
                <div class="col-sm-3"> <!--gradosGrupo-->
                    <label for="asesor">Grados en el grupo:</label>                                              
                </div>            
                <div class="col-sm-3"> <!--select-->
                    <select class="custom-select mr-sm-2" id="anio" style="width:100%">
                        <option selected>Seleccione</option>
                        <option value="3"> 0</option>
                        <option value="1">1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="1">4</option>
                        <option value="2"> 5</option>
                        <option value="3"> 6</option>
                        <option value="1">7</option>
                        <option value="2"> 8</option>
                        <option value="3"> 9</option>
                        <option value="1">10</option>
                        <option value="2"> 11</option>                           
                    </select>                                                
                </div>
            </div> 
            <label ></label>
            <div class="form-row align-items-left">                    
                <div class="col-sm-2"><!--nomGrupo-->
                    <label for="numEst" >Nombre del grupo:</label>                                                
                </div>          
                <div class="col-sm-4"><!--input-->             
                        <input type="text" style="width:100%" class="form-control" id="numEst">                                            
                </div>          
                <div class="col-sm-3"><!--numDocentes-->
                    <label for="asesor">Número de docentes</label>                                              
                </div>            
                <div class="col-sm-3">    <!--input-->        
                    <input type="number" style="width:50%" class="form-control" id="numEst">                                                 
                </div>
            </div> 
            <label ></label>
            <div class="form-row align-items-left">                    
                <div class="col-sm-3"><!--pregunta-->
                    <label for="pregunta" >Pregunta aprobada:</label>                                                
                </div>          
                <div class="col-sm-9"><!--textArea-->             
                    <div class="form-group">
                        <textarea class="form-control" id="pregunta" rows="4"></textarea>
                    </div>                                      
                </div>             
            </div> 
            <label ></label>
            <div class="form-row align-items-left">                    
                <div class="col-sm-3"><!--identifica dodentes-->
                    <label for="pregunta" >Identificación de los docentes:</label>                                                
                </div>          
                <div class="col-sm-1"><!--Btn para acordeon-->               
                    <div class="form-group">
                        <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapseUnfiled" aria-expanded="true"
                        aria-controls="collapseUnfiled">                            
                            <button type="submit" class="btn btn-primary mb-2">+</button>                         
                        </a>
                    </div>                                      
                </div> 
            </div> 
            <label ></label> 
        </form> 
    </fieldset>
</div>

<!--Accordion wrapper ini-->
<div class="accordion md-accordion accordion-blocks" id="accordionEx78" role="tablist" aria-multiselectable="true">

    <!-- Accordion card ini-->
    <div class="card">

        <!-- Card body -->
        <div id="collapseUnfiled" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled" data-parent="#accordionEx78">
            <div class="card-body">       
                <!-- formularios ini -->

                <div>
                    <fieldset style="border:2px solid;    -moz-border-radius:8px;   -webkit-border-radius:8px;   border-radius:8px;">           
                        <form>
                            <legend>Identificación de los docentes</legend>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--nombre completo-->
                                    <label for="nombre" >Nombre completo:</label>                                        
                                </div>          
                                <div class="col-sm-4"><!--input-->                
                                        <input type="text" class="form-control" style="width:100%" id="nombre">                                     
                                </div> 
                                <div class="col-sm-5"><!--vacío-->     
                                        <label></label>                                              
                                </div>                   
                            </div> 
                            <label></label>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--telefono-->
                                    <label for="telefono" >Teléfono:</label>                                        
                                </div>          
                                <div class="col-sm-3"><!--input-->                
                                        <input type="text" class="form-control" style="width:100%" id="telefono">                                     
                                </div> 
                                <div class="col-sm-6"><!--vacío-->     
                                        <label></label>                                              
                                </div>         
                            </div> 
                            <label></label>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--correo-->
                                    <label for="correo" >Correo electrónico:</label>                                        
                                </div>          
                                <div class="col-sm-4"><!--input-->                
                                        <input type="email" class="form-control" style="width:100%" id="correo" placeholder="ejemplo@gmail.com">                                     
                                </div> 
                                <div class="col-sm-3"><!--maestria-->
                                    <label for="maestria">Perteneció a Maestría Ondas:</label>                                              
                                </div>            
                                <div class="col-sm-2">    <!--select-->    
                                    <select class="custom-select mr-sm-2" id="maestria" style="width:100%">
                                        <option selected></option>
                                        <option value="si"> Si</option>
                                        <option value="no">No</option>
                                    </select>                                                
                                </div>    
                            </div> 
                            <label></label>
                            <div class="form-row align-items-center"> 
                                <div class="col-sm-5">                                                     
                                </div>                 
                                <div class="col-sm-2"><!--Btn añadir-->               
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-2" style="width:100%">Añadir</button>
                                    </div>                                      
                                </div>   
                                <div class="col-sm-5">                                                     
                                </div>          
                            </div> 
                            <label ></label> 
                            <div class="form-row align-items-center"> <!--tabla-->
                                <table class="table table-sm table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre completo</th>
                                            <th scope="col">teléfono</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Maestría Ondas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <td></td>
                                            <td></td>
                                            <td><input type="checkbox" class="form-check-input position-static" id="maestria" style="align-center"></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td></td>
                                            <td></td>
                                            <td><input type="checkbox" class="form-check-input position-static" id="maestria"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </form> 
                    </fieldset>
                </div>
                <label ></label>

                <div>
                    <fieldset style="border:2px solid;    -moz-border-radius:8px;   -webkit-border-radius:8px;   border-radius:8px;">           
                        <form>
                            <legend>Identificación del coordinador</legend>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--nombre completo-->
                                    <label for="nombre" >Nombre completo:</label>                                        
                                </div>          
                                <div class="col-sm-4"><!--input-->                
                                        <input type="text" class="form-control" style="width:100%" id="nombre">                                     
                                </div> 
                                <div class="col-sm-5"><!--vacío-->     
                                        <label></label>                                              
                                </div>                   
                            </div> 
                            <label></label>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--telefono-->
                                    <label for="telefono" >Teléfono:</label>                                        
                                </div>          
                                <div class="col-sm-3"><!--input-->                
                                        <input type="text" class="form-control" style="width:100%" id="telefono">                                     
                                </div> 
                                <div class="col-sm-6"><!--vacío-->     
                                        <label></label>                                              
                                </div>         
                            </div> 
                            <label></label>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--correo-->
                                    <label for="correo" >Correo electrónico:</label>                                        
                                </div>          
                                <div class="col-sm-4"><!--input-->                
                                        <input type="email" class="form-control" style="width:100%" id="correo" placeholder="ejemplo@gmail.com">                                     
                                </div> 
                                <div class="col-sm-5"><!--vacío-->     
                                        <label></label>                                              
                                </div>                 
                            </div>
                            <label></label>      
                        </form> 
                    </fieldset>
                </div>
                <label ></label>

                <div>
                    <fieldset style="border:2px solid;    -moz-border-radius:8px;   -webkit-border-radius:8px;   border-radius:8px;">           
                        <form>
                            <legend>Identificación del rector</legend>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--nombre completo-->
                                    <label for="nombre" >Nombre completo:</label>                                        
                                </div>          
                                <div class="col-sm-4"><!--input-->                
                                        <input type="text" class="form-control" style="width:100%" id="nombre">                                     
                                </div> 
                                <div class="col-sm-5"><!--vacío-->     
                                        <label></label>                                              
                                </div>                   
                            </div> 
                            <label></label>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--telefono-->
                                    <label for="telefono" >Teléfono:</label>                                        
                                </div>          
                                <div class="col-sm-3"><!--input-->                
                                        <input type="text" class="form-control" style="width:100%" id="telefono">                                     
                                </div> 
                                <div class="col-sm-6"><!--vacío-->     
                                        <label></label>                                              
                                </div>         
                            </div> 
                            <label></label>
                            <div class="form-row align-items-left">                    
                                <div class="col-sm-3"> <!--correo-->
                                    <label for="correo" >Correo electrónico:</label>                                        
                                </div>          
                                <div class="col-sm-4"><!--input-->                
                                        <input type="email" class="form-control" style="width:100%" id="correo" placeholder="ejemplo@gmail.com">                                     
                                </div> 
                                <div class="col-sm-5"><!--vacío-->     
                                        <label></label>                                              
                                </div>                 
                            </div>   
                            <label></label>   
                        </form> 
                    </fieldset>
                </div>
                <label ></label>

                <div>
                    <fieldset style="border:2px solid;    -moz-border-radius:8px;   -webkit-border-radius:8px;   border-radius:8px;">
                        <form>
                            <legend>Ubicación del proyecto</legend>
                            <div class="form-row align-items-center">        
                                <div class="text-center">
                                    <img src="http://localhost/fundeca/wp-content/plugins/fundeca-plugin/assets/img/mapa.jpg" class="rounded" >
                                </div> 
                            </div>
                        </form>
                    </fieldset>
                </div>
                <label ></label>

                <form>
                    <div class="form-row align-items-center"> 
                        <div class="col-sm-4">                                                     
                        </div>                 
                        <div class="col-sm-4"><!--Btn añadir-->               
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-2" style="width:100%; heigth:5px;">Guardar proyecto</button>
                            </div>                                      
                        </div>   
                        <div class="col-sm-4">                                                     
                        </div>          
                    </div>
                </form>   

                <!-- formularios end -->
            </div>
        </div>
        <!-- Card body end-->
    </div>
    <!-- Accordion card end-->
</div>
<!--/.Accordion wrapper end-->

<?php 
   
}


