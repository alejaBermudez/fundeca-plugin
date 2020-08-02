<?php

if(!defined('ABSPATH')) exit; 
 
 /**
 * Shortcode para la historia: Gestión de inscripciones
 * USO: [fundeca_gestion_inscripciones]
 */

add_shortcode('fundeca_gestion_inscripciones', 'fundeca_gestion_inscripciones');
 
function fundeca_gestion_inscripciones(){     
    ob_start();
    ?>

<form>
    <fieldset>
        <ul class="div-menu">
            
            <form> 
            <fieldset>
                <div class="col-sm-4">
                    <img style=" margin-left: 5px auto; display: block; width: 120px; border: 6px solid #2c2f3f;" src="http://localhost/fundeca/wp-content/plugins/fundeca-plugin/assets/img/404.png" >        
                </div>
            </fieldset>          
            </form>
           
            <form>  
            <fieldset>           
            <div>
                <h3>Gestión de proyecto</h3>
            </div>  

            <div class="div-menu">
                <div class="row">
                    <div class="col-lg-2">
                        <ul>
                        <li> <label for="select_codigo">Código:</label > 
                            <select name="select_codigo" id="select_codigo" required>
                                    <option value="">Elige </option>
                                    <option value="codigo1">código 1</option>
                                    <option value="codigo2">código 4</option>
                                    <option value="codigo3">código 3</option>
                                    <option value="codigo4">código 5</option>
                            </select>
                        </li>
                        <li> <label for="select_institucion">Inst Educativa:</label > 
                            <select name="select_institucion" id="select_institucion" required>
                                <option value="">Elige </option>
                                <option value="inst1">institución 1</option>
                                <option value="inst2">institución 4</option>
                                <option value="inst3">institución 3</option>
                                <option value="inst4">institución 5</option>
                            </select> 
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <ul>
                        <li> <label for="select_asesor">Asesor:</label >
                            <select name="select_asesor" id="select_asesor" required>
                                <option value="">Elige </option>
                                <option value="asesor1">Asesor 1</option>
                                <option value="asesor2">Asesor 4</option>
                                <option value="asesor3">Asesor 3</option>
                                <option value="asesor4">Asesor 5</option>
                            </select> 
                        </li>
                        <li> <label for="select_linea">Linea:</label> 
                            <select name="select_linea" id="select_linea" required>
                                <option value="">Elige </option>
                                <option value="linea1">Línea 1</option>
                                <option value="linea2">Línea 4</option>
                                <option value="linea3">Línea 3</option>
                                <option value="linea4">Línea 5</option>
                            </select>  
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <ul>
                        <li> <label for="select_municipio">Municipio:</label >
                            <select name="select_municipio" id="select_municipio" required>
                                <option value="">Elige </option>
                                <option value="municipio1">Municipio 1</option>
                                <option value="municipio2">Municipio 2</option>
                                <option value="municipio3">Municipio 3</option>
                                <option value="municipio4">Municipio 4</option>
                            </select> 
                        </li>
                        <li> <label for="select_etapa">Etapa:</label > 
                            <select name="select_etapa" id="select_etapa" required>
                                <option value="">Elige </option>
                                <option value="etapa1"> 1</option>
                                <option value="etapa2"> 2</option>
                                <option value="etapa3"> 3</option>
                            </select>  
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <ul>
                        <li> <label for="select_sede">Sede:</label >
                            <select name="select_sede" id="select_sede" required>
                                <option value="">Elige </option>
                                <option value="sede1">Sede 1</option>
                                <option value="sede2">Sede 2</option>
                                <option value="sede3">Sede 3</option>
                                <option value="sede4">Sede 4</option>
                            </select> 
                        </li>
                        <li> <label for="select_maestria">Maestría:</label> 
                            <select name="select_maestria" id="select_maestria" required>
                                <option value="">Elige </option>
                                <option value="si"> Si</option>
                                <option value="no"> No</option>
                             </select>  
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <ul>
                        <li> <label for="select_grado">Grados:</label >
                            <select name="select_grado" id="select_grado" required>
                                <option value="">Elige </option>
                                <option value="1"> 0</option>   
                                <option value="1"> 1</option>  
                                <option value="1"> 2</option>  
                                <option value="1"> 3</option>  
                                <option value="1"> 4</option>  
                                <option value="1"> 5</option>  
                                <option value="1"> 6</option>  
                                <option value="1"> 7</option>  
                                <option value="1"> 8</option>  
                                <option value="1"> 9</option>  
                                <option value="1"> 10</option>  
                                <option value="1"> 11</option>                           
                            </select> 
                        </li>
                        <li> <label for="select_zona">Zona:</label> 
                            <select name="select_zona" id="select_zona" required>
                                <option value="">Elige </option>
                                <option value="si"> Si</option>
                                <option value="no"> No</option>
                             </select> 
                             
                             <label for="select_fecha">Año:</label > 
                            <select name="select_fecha" id="select_fecha" required>
                                <option value="">Elige</option>
                                <option value="2020">1</option>
                                <option value="2021">2</option>
                                <option value="2022">3</option>
                             </select>  
                        </li>
                        </ul>
                    </div>
                </div>                
            </div>
            </fieldset>   
            </form>
        </ul>
    </fieldset>
</form>   
<div class="div-menu">
    <ul>
    <input type="submit" id="boton" value="Buscar"><a href="buscar">  
    <input type="submit" id="boton" value="Limpiar"><a href="limpiar">  
    <input type="submit" id="boton" value="Exportar" class="activate"><a href="exportar"> 
    </ul>
</div> 

<form>
    <fieldset>
    <div class="div-menu">
        <table>
            <tr>
                <th>Código</th>
                <th>Asesor</th>
                <th>Municipio</th>
                <th>Sede</th>
                <th>Zona</th>
                <th>Institución</th>
                <th>Etapa del proyecto</th>
                <th>Línea</th>
                <th>Grados</th>
                <th>Maestría Ondas</th>
                <th>Año</th>
                <th>Opciones</th>
            </tr>
            <tr> 
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>            
            </tr>
            <tr> 
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>            
            </tr>
            <tr> 
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>            
            </tr>
        </table>
    </div>
    </fieldset>
</form>

<?php
   return ob_get_clean();
}