<?php
require_once 'models/ContactosModel.php';

class ContactosController
{
    private $models;

    public function __construct()
    {
        $this->models = new ContactosModel();
    }

    public function presentar()
    {
        require_once 'views/contacto/ContactosAgregar.php';
    }

    public function listar()
    {
        $resultados = $this->models->listar();
        require_once 'views/contacto/presentarcontactos.php';
    }

    public function listarAdmin()
    {
        $resultados = $this->models->listar();
        require_once 'views/contacto/presentarcontactosAdmin.php';
    }

    public function gastronomiaVer()
    {
        require_once 'views/contacto/Gastronomia.php';
    }

    public function agregar()
    {
        $nombre = htmlentities($_POST['fullname']);
        $correo = htmlentities($_POST['email']);
        $telefono = htmlentities($_POST['phone']);
        $ciudad = htmlentities($_POST['city']);
        $titulo = htmlentities($_POST['subject']);
        $mensaje = htmlentities($_POST['message']);
        $preferencia = htmlentities($_POST['correos']);

        $this->models->insertar($nombre, $correo, $telefono, $ciudad, $titulo, $mensaje, $preferencia);

        header('Location:index.php?c=contactos&a=presentar');
    }

    public function eliminarAdmin()
    {
        $id = htmlentities($_GET['id']);
        $this->models->eliminar($id);
        header('Location:index.php?c=contactoS&a=listarAdmin');
    }

    public function eliminar()
    {
        $id = htmlentities($_GET['id']);
        $this->models->eliminar($id);
        header('Location:index.php?c=contactoS&a=listar');
    }

    public function editar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = htmlentities($_POST['id']);
            $nombree = htmlentities($_POST['fullname']);
            $correoe = htmlentities($_POST['email']);
            $telefonoe = htmlentities($_POST['phone']);
            $ciudade = htmlentities($_POST['city']);
            $tituloe = htmlentities($_POST['subject']);
            $mensajee = htmlentities($_POST['message']);
            $preferenciae = htmlentities($_POST['correos']);
            //comuncarme con el modelo
            $this->models->editar($nombree, $correoe, $telefonoe, $ciudade, $tituloe, $mensajee, $preferenciae, $id);

            header('Location:index.php?c=contactoS&a=listar');
        } else {
            require_once 'models/ContactosModel.php';
            $modeloContact = new ContactosModel();
            $contacto = $modeloContact->listar();
            $id = $_GET['id'];
            $contactos = $this->models->buscarxId($id);
            require_once 'views/contacto/editarcontactos.php';
        }
    }

    public function buscar()
    {
        $busca = $_POST['busqueda'];
        $resultados = $this->models->buscar($busca);
        require_once 'views/contacto/presentarcontactos.php';
    }

    public function buscarAdmin()
    {
        $busca = $_POST['busqueda'];
        $resultados = $this->models->buscarAdmin($busca);
        require_once 'views/contacto/presentarcontactosAdmin.php';
    }
}
