<?php
include_once('models/modelCat.php');
include_once('models/modelProd.php'); 
include_once('views/viewProductos.php');

class ControllerProd{
    private $modelCat;
    private $modelProd;
    private $viewProd;
    private $authHelper;
    

    public function __construct(){              //constructores 
        $this->modelCat = new modelCat();
        $this->modelProd = new modelProd();
        $this->viewProd = new viewProductos();
        $this->authHelper = new AuthHelper();
       
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
        $categorias=$this->modelCat->obtenerCategorias();
        if($productos){
            $this->viewProd->mostrarTodosLosProductos($productos, $categorias);
        }
        else{
            $this->viewProd->error('No hay productos para mostrar!');
        }
    
    }

    public function obtenerOfertas(){
        $productos = $this->modelCat->obtenerOfertas();
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

    public function agregarProducto(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
        $producto = $_POST['producto'];
        $graduacion=$_POST['graduacion'];
        $precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
        $imagen=$_FILES['imagesToUpload']['tmp_name']; //guarda la img en la variable para pasar por parametro
        if(isset($producto) && isset($graduacion) && isset($precio)){ 
            if($_FILES['imagesToUpload']['type'] == "image/jpg" || $_FILES['imagesToUpload']['type'] == "image/jpeg" || $_FILES['imagesToUpload']['type'] == "image/png"){
                $productoId = $this->modelProd->guardarProd($producto, $graduacion, $precio, $categoria);    
                $this->modelProd->guardarImagen($productoId, $imagen); 
                header('Location: ' . INICIO);
            }
            else{
                $this->modelProd->guardarProd($producto, $graduacion, $precio,$categoria);
                // header('Location: ' . INICIO);
            } 
        }
        else {                
            $this->viewProd->error("Faltan datos obligatorios");
        }

    }
    public function mostrarImg($params= null){
        $id_prod= $params[':ID'];
        $imagen=$this->modelProd->traerImgProd($id_prod);
        $this->viewProd->mostrarFoto($imagen);

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
}