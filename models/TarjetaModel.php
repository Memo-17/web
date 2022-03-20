<?php
require_once 'config/conexion.php';

class TarjetaModel
{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function listar(){
        $sql = "SELECT id, Nombre, NumTarjeta, Mes, Anio, CCV FROM info_tarjeta";
        $stm = $this->con->prepare($sql);
        $stm->execute();
        $resultados = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function listarWithUser($idUsuario)
    {
        $sql = "SELECT id,Nombre, NumTarjeta, Mes, Anio, CCV FROM info_tarjeta WHERE idUsuario=:idUsuario";
        $stmt = $this->con->prepare($sql);
        $data = [
            'idUsuario' => $idUsuario
        ];
        $stmt->execute($data);
        $info_tarjeta = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $info_tarjeta;
    }

    public function InsertarTarjeta($nombre, $ntarjeta, $mes, $anio, $ccv, $idUsuario)
    {
        $sql = "INSERT INTO info_tarjeta(Nombre, NumTarjeta, Mes, Anio, CCV, idUsuario) VALUES
        (:nombre,:ntarjeta,:mes,:anio, :ccv, :idUsuario)";

        $sentencia = $this->con->prepare($sql);

        $data = [
            'nombre' => $nombre,
            'ntarjeta' => $ntarjeta,
            'mes' => $mes,
            'anio' => $anio,
            'ccv' => $ccv,
            'idUsuario'=> $idUsuario
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }

    public function eliminar($id)
    {
        $sql = "delete from info_tarjeta where id=:id";
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

    public function editar($id,$nombre, $ntarjeta, $mes, $anio, $ccv)
    {
        $sql = "UPDATE `info_tarjeta` set `Nombre`=:nombre, `NumTarjeta`=:ntarjeta, `Mes`=:mes, `Anio`=:anio, 
        `CCV`=:ccv WHERE id=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'id' => $id,
            'nombre' => $nombre,
            'ntarjeta' => $ntarjeta,
            'mes' => $mes,
            'anio' => $anio,
            'ccv' => $ccv
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }

    public function searchnTarjeta($id){
        $sql = "SELECT * FROM info_tarjeta WHERE id=:id";
        $stmt = $this->con->prepare($sql);
        $data = [
            'id' => $id
        ];
        $stmt->execute($data);
        $info_tarjeta = $stmt-> fetch(PDO::FETCH_ASSOC);
        return $info_tarjeta;
    }

    public function searchName($name){
        $sql = "SELECT * FROM info_tarjeta WHERE Nombre LIKE :n";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $name . '%';
        $data = ['n'=>$conlike];
        $stmt->execute($data);
        $dataName = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $dataName;
    }
}
