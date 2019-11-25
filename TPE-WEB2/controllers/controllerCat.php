<?php
include_once('models/modelProd.php');
include_once('models/modelCat.php');
include_once('views/viewCategorias.php');

class ControllerCat{
    private $modelProd;
    private $modelCat;
    private $viewCat;
    private $authHelper;
    
    public function __construct(){              //constructores 
        $this->modelCat = new modelCat();
        $this->modelProd = new modelProd();
        $this->viewCat = new viewCategorias();
        $this->authHelper = new AuthHelper();
       
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

    public function eliminarCategoria($params = null){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera 
        $tipo=$this->authHelper->obtenerTipoUsuario();
        if($tipo=="1"){  
            $id = $params[':ID'];
            $productos=$this->modelProd->obtenerProductos($id); 
            if($productos){
                $this->viewCat->error("Para eliminar la categoria deseada se deben borrar los productos que hay en ella");
            }
            else{
                $this->modelCat->eliminarCat($id); 
                header("Location: " . INICIO);    
            }
        }
    }
    public function agregarCategoria(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
        $tipo=$this->authHelper->obtenerTipoUsuario();
        if($tipo=="1"){
            $nombre = $_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            if(isset($nombre) && isset($descripcion)){ 
                $this->modelCat->guardarCat($nombre, $descripcion);
                header('Location: ' . INICIO);
            }
            else{
                $this->viewCat->error("Faltan datos obligatorios");
            }
        }
    }
    public function traerCategoriaModificar($params = null){
        $id_cat= $params[':ID'];
        $categ=$this->modelCat->descripcionCat($id_cat);
        $this->viewCat->mostrarCatModificar($categ);
    }
    public function modificarCategoria(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
        $tipo=$this->authHelper->obtenerTipoUsuario();
        if($tipo=="1"){
            $id_cat=$_POST['id_cat'];
            $nomb = $_POST['nomb'];
            $descri=$_POST['descri'];
            if(isset($nomb) && isset($descri)){
                $this->modelCat->modificarCat($nomb,$descri,$id_cat);
                header("Location: " .  INICIO);
            }
            else {
                $this->viewCat->error("Faltan datos obligatorios");
            }
        }

    }
}