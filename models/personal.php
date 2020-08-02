<?php

    include "../config/conexion.php";
    session_start();

    class Personal{
        public $id;
        public $nombre;
        public $telefono;
        public $correo;  
        public $maestriaOndas;      
        public $cargo;

        function __construct($id, $nombre, $telefono, $correo, $maestriaOndas, $cargo) {                                                            
            $this->id = $id,
            $this->nombre = $nombre;
            $this->telefono = $telefono;
            $this->correo = $correo;
            $this->maestriaOndas = $maestriaOndas;
            $this->cargo = $cargo;
        }
    }
?>

