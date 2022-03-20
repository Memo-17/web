<?php
require_once 'config/conexion.php';

class TrabajosModel
{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function listar()
    {
        $sql = "SELECT * FROM trabajo";
        $stm = $this->con->prepare($sql);
        $stm->execute();
        $resultados = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function insertar($nombre, $apellido, $telefono, $correo, $naciento, $trabajo)
    {
        $sql = "INSERT INTO trabajo(NOMBRE, APELLIDO, TELEFONO, CORREO, NACIMIENTO, TRABAJO, EMISION) VALUES
        (:nombre, :apellido, :telefono, :correo, :nacimiento, :trabajo, :emision)";

        $sentencia = $this->con->prepare($sql);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'telefono' => $telefono,
            'correo' => $correo,
            'nacimiento' => $naciento,
            'trabajo' => $trabajo,
            'emision' => $strfecha
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }

    public function eliminar($id)
    {
        $sql = "delete from trabajo where id=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'id' => $id
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }

    public function editar($nombre1, $apellido1, $telefono1, $correo1, $nacimiento1, $trabajo1, $id)
    {
        $sql = "UPDATE `trabajo` set `NOMBRE`=:nombre1, `APELLIDO`=:apellido1, `TELEFONO`=:telefono1, `CORREO`=:correo1,
        `NACIMIENTO`=:nacimiento1, `TRABAJO`=:trabajo1  WHERE id=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'nombre1' => $nombre1,
            'apellido1' => $apellido1,
            'telefono1' => $telefono1,
            'correo1' => $correo1,
            'nacimiento1' => $nacimiento1,
            'trabajo1' => $trabajo1,
            'id' => $id
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }

    //obtener id para editar
    public function buscarxId($id)
    {
        $sql = "select * from trabajo where id=:id";
        $stmt = $this->con->prepare($sql);
        $data = [
            'id' => $id
        ];
        $stmt->execute($data);
        $trabajo = $stmt->fetch(PDO::FETCH_ASSOC);
        return $trabajo;
    }

    public function buscar($busca)
    {
        $sql = "select * from trabajo where NOMBRE like :n";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $busca . '%';
        $data = ['n' => $conlike];
        $stmt->execute($data);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
    public function buscarAdmin($busca)
    {
        $sql = "select * from trabajo where NOMBRE like :n";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $busca . '%';
        $data = ['n' => $conlike];
        $stmt->execute($data);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
}