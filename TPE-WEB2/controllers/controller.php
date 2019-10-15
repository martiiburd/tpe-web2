<?php
include_once('models/model.php');
include_once('views/viewCategorias.php');  
include_once('views/viewProductos.php');


class Controller{
    private $modelCat;
    private $modelProd;
    private $viewCat;
    private $viewProd;
    private $authHelper;
    

    public function __construct(){              //constructores 
        $this->modelCat = new model();
        $this->modelProd = new model();
        $this->viewCat = new viewCategorias();
        $this->viewProd = new viewProductos();
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
    public function mostrarProducto($params=null) {
        $idProducto = $params[':ID'];
        $productos = $this->modelProd->obtenerProductos($idProducto);
        $categorias=$this->modelCat->obtenerCategorias();
        if ($productos){
            $this->viewProd->mostrarProductos($productos, $categorias);
        }
        else{
            $this->viewProd->error('No hay productos para mostrar!');
            $this->viewProd->agregarProd($idProducto,$categorias);
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

    public function eliminarProducto($params = null){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera   
        $id = $params[':ID'];
        $this->modelProd->eliminarProd($id);
        header("Location: " . INICIO);  
    }

    public function eliminarCategoria($params = null){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera   
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

    public function agregarCategoria(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
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

    public function agregarProducto(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
        $producto = $_POST['producto'];
        $graduacion=$_POST['graduacion'];
        $precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
        if(isset($producto) && isset($graduacion) && isset($precio)){  
            $this->modelProd->guardarProd($producto, $graduacion, $precio,$categoria);
            header('Location: ' . INICIO);
        }
        else {                
            $this->viewProd->error("Faltan datos obligatorios");
        }

    }

    public function traerProductoModificar($params = null){
        $id_prod= $params[':ID'];
        $producto=$this->modelProd->descripcionProd($id_prod);
        $categorias=$this->modelCat->obtenerCategorias();
        $this->viewProd->mostrarProdModificar($producto, $categorias);
    }

    public function modificarProducto(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
        $id_prod=$_POST['id_prod'];
        $prod = $_POST['prod'];
        $grad=$_POST['grad'];
        $prec=$_POST['prec'];
        $categ=$_POST['categ'];
        
        
        if(isset($prod) && isset($grad) && isset($prec) && isset($categ)){
            $this->modelProd->modificarProd($prod,$grad,$prec,$categ,$id_prod);
            header("Location: " .  INICIO);
        }
        else {
            $this->viewProd->error("Faltan datos obligatorios");
        }

    }

    public function traerCategoriaModificar($params = null){
        $id_cat= $params[':ID'];
        $categ=$this->modelCat->descripcionCat($id_cat);
        $this->viewCat->mostrarCatModificar($categ);
    }
    public function modificarCategoria(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
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