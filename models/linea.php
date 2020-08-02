<?php

    include "../config/conexion.php";
    session_start();

    class Linea{
        public $id;
        public $nombre;

        function __construct($id, $nombre) {                                                            
            $this->id = $id,
            $this->nombre = $nombre;
        }
    }
?>