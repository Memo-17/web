<?php
require_once 'config/conexion.php';

class ContactosModel
{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function listar()
    {
        $sql = "SELECT * FROM contacto";
        $stm = $this->con->prepare($sql);
        $stm->execute();
        $resultados = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function insertar($nombre, $correo, $telefono, $ciudad, $titulo, $mensaje, $preferencia)
    {
        $sql = "INSERT INTO contacto(NOMBRE_APELLIDO, CORREO, TELEFONO, CIUDAD, TITULO_MENSAJE, MENSAJE, PREFERENCIA, FECHA_EMISION) VALUES
        (:nombre, :correo, :telefono, :ciudad, :titulo, :mensaje, :preferencia, :fecha)";

        $sentencia = $this->con->prepare($sql);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'nombre' => $nombre,
            'correo' => $correo,
            'telefono' => $telefono,
            'ciudad' => $ciudad,
            'titulo' => $titulo,
            'mensaje' => $mensaje,
            'preferencia' => $preferencia,
            'fecha' => $strfecha
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }

    public function eliminar($id)
    {
        $sql = "delete from contacto where ID_CONTACTO=:id";
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

    public function editar($nombree, $correoe, $telefonoe, $ciudade, $tituloe, $mensajee, $preferenciae, $id)
    {
        $sql = "UPDATE `contacto` set `NOMBRE_APELLIDO`=:nombree, `CORREO`=:correoe, `TELEFONO`=:telefonoe, `CIUDAD`=:ciudade, 
        `TITULO_MENSAJE`=:tituloe, `MENSAJE`=:mensajee, `PREFERENCIA`=:preferenciae WHERE ID_CONTACTO=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'nombree' => $nombree,
            'correoe' => $correoe,
            'telefonoe' => $telefonoe,
            'ciudade' => $ciudade,
            'tituloe' => $tituloe,
            'mensajee' => $mensajee,
            'preferenciae' => $preferenciae,
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
        $sql = "select * from contacto where ID_CONTACTO=:id";
        $stmt = $this->con->prepare($sql);
        $data = [
            'id' => $id
        ];
        $stmt->execute($data);
        $contacto = $stmt->fetch(PDO::FETCH_ASSOC);
        return $contacto;
    }

    //Buscar por nombre o apellido
    public function buscar($busca)
    {
        $sql = "select * from contacto where NOMBRE_APELLIDO like :n";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $busca . '%';
        $data = ['n' => $conlike];
        $stmt->execute($data);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function buscarAdmin($busca)
    {
        $sql = "select * from contacto where NOMBRE_APELLIDO like :n";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $busca . '%';
        $data = ['n' => $conlike];
        $stmt->execute($data);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
}
