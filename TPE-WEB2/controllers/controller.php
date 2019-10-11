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

    public function eliminar($params = null){
        $id = $params[':ID'];
        $this->modelCat->eliminarCat($id);
        $this->modelProd->eliminarProd($id);
        header("Location: " . INICIO);

    }

    public function agregarCategoria(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
        $nombre = $_POST['nombre'];
        $descripcion=$_POST['descripcion'];

        if(!empty($nombre) && !empty($descripcion)){
            // $agregar = true;                 preguntar como hacer para no agregar categorias con el mismo nombre 
            // if($nombre == $categoria->nombre)

            $this->modelCat->guardarCat($nombre, $descripcion);
            header('Location: ' . INICIO);
        }
        else {
            $this->viewCat->error("Faltan datos obligatorios");
        }
    }

    public function agregarproducto(){
        
        if(session_status() !=PHP_SESSION_ACTIVE){
            $producto = $_POST['producto'];
            $graducion=$_POST['graduacion'];
            $precio=$_POST['precio'];
    
            if(!empty($producto) && !empty($graduacion) && !empty($precio)){
                // $agregar = true;                 preguntar como hacer para no agregar productos con el mismo nombre 
    
                $this->modelProd->guardarProd($producto, $graduacion, $precio);
                header('Location: ' . INICIO);
            }
            else {
                $this->viewProd->error("Faltan datos obligatorios");
            }
        }
        else {
            $this->authHelper->chequearUsuarioRegistrado(); //barrera
        }
        
    }
    
}