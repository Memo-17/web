<?php
require_once 'models/TarjetaModel.php';
require_once 'controllers/UsuariosController.php';

if (!isset($_SESSION)) {
    session_start();
}

class TarjetaController
{
    private $models;
    private $user;

    public function __construct()
    {
        $this->models = new TarjetaModel();
        $this->user = new UsuariosController();
    }

    public function getPlanes()
    {
        require_once 'views/tarjeta/Planes.php';
    }


    public function ServicesUser()
    {
        $controller = new TarjetaController();
        $mostrar = $controller->listarforUser($_SESSION["usuario"]["id"]);
        echo $mostrar;
    }

    public function Services()
    {
        if (isset($_SESSION["usuario"]["rol"])) {
            if ($_SESSION["usuario"]["rol"] == 1) {
                $controller = new TarjetaController();
                $mostrar = $controller->listar();
                //$mostrar = $controller->listarforUser($_SESSION["usuario"]["id"]);
                echo $mostrar;
            } else {
                if ($_SESSION["usuario"]["rol"] == 2) {
                    $controller = new TarjetaController();
                    $mostrar = $controller->getPlanes();
                    echo $mostrar;
                }
            }
        } else {
            $controller = new TarjetaController();
            $mostrar = $controller->getPlanes();
            echo $mostrar;
        }
    }

    public function getTarjeta()
    {
        require_once 'views/tarjeta/Tarjeta.php';
    }

    public function addTarget()
    {
        $nombre = htmlentities($_POST['txtNombre']);
        $ntarjeta = htmlentities($_POST['txtNumeroTarjeta']);
        $mes = htmlentities($_POST['mes']);
        $anio = htmlentities($_POST['año']);
        $ccv = htmlentities($_POST['txtCCV']);
        $idUsuario = $_SESSION["usuario"]["id"];

        $this->models->InsertarTarjeta($nombre, $ntarjeta, $mes, $anio, $ccv, $idUsuario);

        header('Location:index.php?c=Tarjeta&a=getTarjeta');
    }

    public function listar()
    {
        $resultados = $this->models->listar();
        require_once 'views/tarjeta/data_tarjeta.php';
    }

    public function listarforUser($user)
    {
        $resultados = $this->models->listarWithUser($user);
        require_once 'views/tarjeta/data_tarjeta.php';
    }

    public function editar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = htmlentities($_POST['id']);
            $nombre = htmlentities($_POST['txtNombre']);
            $ntarjeta = htmlentities($_POST['txtNumeroTarjeta']);
            $mes = htmlentities($_POST['mes']);
            $anio = htmlentities($_POST['año']);
            $ccv = htmlentities($_POST['txtCCV']);
            //comuncarme con el modelo
            $this->models->editar($id, $nombre, $ntarjeta, $mes, $anio, $ccv);

            header('Location:index.php?c=Tarjeta&a=listar');
        } else {
            require_once 'models/TarjetaModel.php';
            $modeloTarjeta = new TarjetaModel();
            $tarjeta = $modeloTarjeta->listar();
            $id = $_GET['id'];
            $tarjetas = $this->models->searchnTarjeta($id);
            require_once 'views/tarjeta/editar_tarjeta.php';
        }
    }

    public function eliminar()
    {
        $id = htmlentities($_GET['id']);
        $this->models->eliminar($id);
        header('Location:index.php?c=tarjeta&a=listar');
    }

    public function verificarUsuario()
    {
        if (!isset($_SESSION["usuario"]["rol"])) {
            $this->user->index();
        }
        if ($_SESSION["usuario"]["rol"] == 2) {
            $controller = new TarjetaController();
            $mostrar = $controller->getTarjeta();
            echo $mostrar;
        }
    }


}
