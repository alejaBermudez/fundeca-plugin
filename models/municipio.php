<?php

    include "../config/conexion.php";
    session_start();

    class Municipio{
        public $id;
        public $nombre;
        public $latitud;
        public $longitud;  

        function __construct($id, $nombre, $latitud, $longitud) {                                                            
            $this->id = $id,
            $this->nombre = $nombre;
            $this->latitud = $latitud;
            $this->longitud = $longitud;
        }
    }
?>