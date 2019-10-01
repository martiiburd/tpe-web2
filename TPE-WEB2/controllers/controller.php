<?php
include_once('models/model.php');
include_once('views/viewCategorias.php');  
include_once('views/viewProductos.php');

class Controller{
    private $modelCat;
    private $modelProd;
    private $viewCat;
    private $viewProd;

    public function __construct(){              //constructores 
        $this->modelCat = new model();
        $this->modelProd = new model();
        $this->viewCat = new viewCategorias();
        $this->viewProd = new viewProductos();
    }

    public function mostrarCategorias(){
        $categorias= $this->modelCat->obtenerCategorias();
        $this->viewCat->mostrarCategorias($categorias);

    }
    public function mostrarProducto($params=null){
        $idProducto = $params[':ID'];
        $productos = $this->modelProd->obtenerProductos($idProducto);
        if ($productos){
            $this->viewProd->mostrarProductos($productos);
        }
        
    
    }
}