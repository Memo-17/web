<?php 
class Conexion{

    public static function getConexion() {
        $database_username = 'root';
        $database_password = 'admin123';
        $dbname="events_website";
        $dsn = 'mysql:host=localhost;dbname=' . $dbname;

        $conexion = null;
        
        try {
            $conexion = new PDO($dsn, $database_username, $database_password ); 
        } catch(Exception $e) {
            echo $e;
            die("Error " . $e->getMessage());
        }

        return $conexion;
    }
}