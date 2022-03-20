<?php
require_once 'config/conexion.php';

class ComentariosModel
{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function listar()
    {
        $sql = "SELECT * FROM resenas";
        $stm = $this->con->prepare($sql);
        $stm->execute();
        $resultados = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function insertar($nombre, $apellidos, $usuario, $correo, $comentarios, $valoracion)
    {
        $sql = "INSERT INTO resenas(NOMBRE, APELLIDOS, USUARIO, CORREO, COMENTARIOS, VALORACION) VALUES
        (:nombre, :apellidos, :usuario, :correo, :comentarios, :valoracion)";

        $sentencia = $this->con->prepare($sql);

        $data = [
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'usuario' => $usuario,
            'correo' => $correo,
            'comentarios' => $comentarios,
            'valoracion' => $valoracion,
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }

    public function eliminar($id)
    {
        $sql = "delete from resenas where ID_USUARIO=:id";
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

    public function editar($nombre, $apellidos, $usuario, $correo, $comentarios, $valoracion, $id)
    {
        $sql = "UPDATE `resenas` set `NOMBRE`=:nombre, `APELLIDOS`=:apellidos, `USUARIO`=:usuario, `CORREO`=:correo, 
        `COMENTARIOS`=:comentarios, `VALORACION`=:valoracion WHERE ID_USUARIO=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'usuario' => $usuario,
            'correo' => $correo,
            'comentarios' => $comentarios,
            'valoracion' => $valoracion,
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
        $sql = "select * from resenas where ID_USUARIO=:id";
        $stmt = $this->con->prepare($sql);
        $data = [
            'id' => $id
        ];
        $stmt->execute($data);
        $resenas = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resenas;
    }

    //Buscar por nombre o apellido
    public function buscar($busca)
    {
        $sql = "select * from resenas where NOMBRE like :n";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $busca . '%';
        $data = ['n' => $conlike];
        $stmt->execute($data);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function buscarAdmin($busca)
    {
        $sql = "select * from resenas where NOMBRE like :n";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $busca . '%';
        $data = ['n' => $conlike];
        $stmt->execute($data);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
}
