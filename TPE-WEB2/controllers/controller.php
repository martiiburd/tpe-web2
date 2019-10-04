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
        if($categorias){
            $this->viewCat->mostrarCategorias($categorias);
        }
        else{
            $this->viewCat->error('No existen categorias!');
        }

    }
    public function mostrarProducto($params=null){
        $idProducto = $params[':ID'];
        $productos = $this->modelProd->obtenerProductos($idProducto);
        if ($productos){
            $this->viewProd->mostrarProductos($productos);
        }
        else{
            $this->viewProd->error('No hay productos para mostrar!');
        }
        
    
    }
    public function mostrarTodosLosProductos(){
        $productos = $this->modelProd->verProductos();
        if($productos){
            $this->viewProd->mostrarTodosLosProductos($productos);
        }
        else{
            $this->viewProd->error('No hay productos para mostrar!');
        }
        
    }

    public function obtenerOfertas(){
        $productos = $this->modelProd->obtenerOfertas();
        if($productos){
            $this->viewProd-> mostrarOfertas($productos);
        }
        else{
            $this->viewProd->error('No hay ofertas disponibles!');
        }
        
    
    }
}