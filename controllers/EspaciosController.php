<?php
require_once 'models/TrabajosModel.php';

class EspaciosController
{
    private $models;

    public function __construct()
    {
        $this->models = new TrabajosModel();
    }

    public function EspaciosVer()
    {
        require_once 'views/trabajo/Espacios.php';
    }

}