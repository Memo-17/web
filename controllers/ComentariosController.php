<?php
require_once 'models/ComentariosModel.php';

class ComentariosController
{
    private $models;

    public function __construct()
    {
        $this->models = new ComentariosModel();
    }

    public function presentar()
    {
        require_once 'views/comentarios/ComentariosAgregar.php';
    }

    public function listar()
    {
        $resultados = $this->models->listar();
        require_once 'views/comentarios/presentar_comentarios.php';
    }

    public function listarAdmin()
    {
        $resultados = $this->models->listar();
        require_once 'views/comentarios/presentar_comentariosAdmin.php';
    }

    public function comentariosVer()
    {
        require_once 'views/comentarios/Comentarios.php';
    }

    public function agregar()
    {
        $nombre = htmlentities($_POST['name']);
        $apellidos = htmlentities($_POST['lastname']);
        $usuario = htmlentities($_POST['name-user']);
        $correo = htmlentities($_POST['email']);
        $comentarios = htmlentities($_POST['Comentario']);
        $valoracion = htmlentities($_POST['star']);


        $this->models->insertar($nombre, $apellidos, $usuario, $correo, $comentarios, $valoracion);

        header('Location:index.php?c=comentarios&a=presentar');
    }

    public function eliminarAdmin()
    {
        $id = htmlentities($_GET['id']);
        $this->models->eliminar($id);
        header('Location:index.php?c=comentarios&a=listarAdmin');
    }

    public function eliminar()
    {
        $id = htmlentities($_GET['id']);
        $this->models->eliminar($id);
        header('Location:index.php?c=comentarios&a=listar');
    }

    public function editar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = htmlentities($_POST['id']);
            $nombres = htmlentities($_POST['name']);
            $apellidos = htmlentities($_POST['lastname']);
            $usuario = htmlentities($_POST['name-user']);
            $email = htmlentities($_POST['email']);
            $comentarios = htmlentities($_POST['Comentario']);
            $valoracion = htmlentities($_POST['star']);

            //comuncarme con el modelo
            $this->models->editar($nombres, $apellidos, $usuario, $email, $comentarios, $valoracion, $id);

            header('Location:index.php?c=comentarios&a=listar');
        } else {
            require_once 'models/ComentariosModel.php';
            $modeloCom = new ComentariosModel();
            $comentario = $modeloCom->listar();
            $id = $_GET['id'];
            $fila = $this->models->buscarxId($id);
            require_once 'views/comentarios/editar-comentarios.php';
        }
    }

    public function buscar()
    {
        $busca = $_POST['busqueda'];
        $resultados = $this->models->buscar($busca);
        require_once 'views/comentarios/presentar_comentarios.php';
    }

    public function buscarAdmin()
    {
        $busca = $_POST['busqueda'];
        $resultados = $this->models->buscarAdmin($busca);
        require_once 'views/comentarios/presentar_comentariosAdmin.php';
    }
}
