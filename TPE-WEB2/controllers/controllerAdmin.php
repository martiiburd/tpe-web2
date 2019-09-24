<?php
include_once('models/modelCategoria.php');
include_once('models/modelBebidas.php');
include_once('views/view.php');  //falta la vista

class ControllerAdministrador{
    private $modelCat;
    private $modelBeb;
    private $viewCat;

    public function __construct(){              //constructores 
        $this->modelCat = new modelCategoria();
        //$this->modelBeb = new modelBebidas();
        $this->viewCat = new viewCategoria();
    }

    public function mostrarCategorias(){
        $categorias= $this->modelCat->obtenerCategorias();
        $this->viewCat->mostrarCategorias($categorias);

    }
}