<?php
require_once 'models/TrabajosModel.php';

class TrabajoController
{
    private $models;

    public function __construct()
    {
        $this->models = new TrabajosModel();
    }

    public function index()
    {
        require_once 'views/principal.php';
    }

    public function presentar()
    {
        require_once 'views/trabajo/Trabajo-Agregar.php';
    }

    public function listar()
    {
        $resultados = $this->models->listar();
        require_once 'views/trabajo/Trabajo-presentar.php';
    }

    public function listarAdmin()
    {
        $resultados = $this->models->listar();
        require_once 'views/trabajo/Trabajo-presentar-admin.php';
    }

    public function agregar()
    {   
        $nombre = htmlentities($_POST['name']);
        $apellido = htmlentities($_POST['lastname']);
        $telefono = htmlentities($_POST['phone']);
        $correo = htmlentities($_POST['correo']);
        $fecha = htmlentities($_POST['date']);
        $trabajo = htmlentities($_POST['trabajo']);

        $this->models->insertar($nombre, $apellido, $telefono, $correo, $fecha, $trabajo );

        header('Location:index.php?c=Trabajo&a=presentar');
    }

    public function eliminarAdmin()
    {
        $id = htmlentities($_GET['id']);
        $this->models->eliminar($id);
        header('Location:index.php?c=Trabajo&a=listarAdmin');
    }

    public function eliminar()
    {
        $id = htmlentities($_GET['id']);
        $this->models->eliminar($id);
        header('Location:index.php?c=Trabajo&a=listar');
    }

    public function editar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = htmlentities($_POST['id']);
            $nombre1 = htmlentities($_POST['name']);
            $apellido1 = htmlentities($_POST['lastname']);
            $telefono1 = htmlentities($_POST['phone']);
            $correo1 = htmlentities($_POST['correo']);
            $nacimiento1 = htmlentities($_POST['date']);
            $trabajo1 = htmlentities($_POST['trabajo']);
            //comuncarme con el modelo
            $this->models->editar($nombre1, $apellido1, $telefono1, $correo1, $nacimiento1, $trabajo1, $id);

            header('Location:index.php?c=Trabajo&a=listar');
        } else {
            require_once 'models/TrabajosModel.php';
            $modelotrabajo = new TrabajosModel();
            $trabajo = $modelotrabajo->listar();
            $id = $_GET['id'];
            $fila = $this->models->buscarxId($id);
            require_once 'views/trabajo/Trabajo-editar.php';
        }
    }

    public function buscar()
    {
        $busca = $_POST['busqueda'];
        $resultados = $this->models->buscar($busca);
        require_once 'views/trabajo/Trabajo-presentar.php';
    }

    public function buscarAdmin()
    {
        $busca = $_POST['busqueda'];
        $resultados = $this->models->buscarAdmin($busca);
        require_once 'views/trabajo/Trabajo-presentar-admin.php';
    }
}