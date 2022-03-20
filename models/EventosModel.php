<?php
require_once 'config/conexion.php';
    class EventosModel{

        public function __construct() {
            $this->con = Conexion::getConexion();
        }
    }
?>