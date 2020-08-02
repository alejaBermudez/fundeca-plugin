<?php

include "../config/conexion.php";
session_start();

class Proyecto
{
    public $codigo;
    public $asesor;
    public $municipio;
    public $sede;  
    public $instEducativa      
    public $zona;
    public $etapa;
    public $pregunta;
    public $linea ;
    public $numEstudiantesGrupo ;
    public $gradosGrupo ;
    public $nombreGrupo ;
    public $numdocentes ;
    public $fecha_inicio ;
    public $fecha_fin ;
    public $anio  ;

    function __construct($codigo, $asesor, $municipio, $sede, $instEducativa, $zona,
    $etapa, $pregunta, $linea, $numEstudiantesGrupo, $gradosGrupo, $nombreGrupo, $numdocentes, $anio) {
                                                        
        $this->codigo = $codigo,
        $this->asesor = $asesor;
        $this->municipio = $municipio;
        $this->sede = $sede;
        $this->instEducativa = $instEducativa;
        $this->zona = $zona;
        $this->etapa = $etapa;
        $this->pregunta = $pregunta;
        $this->linea = $linea;
        $this->numEstudiantesGrupo = $numEstudiantesGrupo;
        $this->gradosGrupo = $gradosGrupo;            
        $this->nombreGrupo = $nombreGrupo;
        $this->numdocentes = $numdocentes;
        $this->anio = $anio;
    }
}
?>

