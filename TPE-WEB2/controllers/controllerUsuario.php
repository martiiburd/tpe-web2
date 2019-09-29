<?php
include_once('models/modelUsuario.php');
include_once('views/viewUsuario.php');  //falta la vista

class ControllerUsuario{
    private $modelCat;
    private $modelProd;
    private $viewCat;
    private $viewProd;

    public function __construct(){              //constructores 
        $this->modelCat = new modelUsuario();
        $this->modelProd = new modelUsuario();
        $this->viewCat = new viewUsuario();
        $this->viewProd = new viewUsuario();
    }

    public function mostrarCategorias(){
        $categorias= $this->modelCat->obtenerCategorias();
        $this->viewCat->mostrarCategorias($categorias);

    }
    public function mostrarProducto(){
        $productos= $this->modelProd->obtenerProductos();
        $this->viewProd->mostrarProductos($productos);
    }
}