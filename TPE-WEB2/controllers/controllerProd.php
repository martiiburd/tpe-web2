<?php
include_once('models/modelCat.php');
include_once('models/modelProd.php'); 
include_once('models/modelImg.php');
include_once('views/viewProductos.php');

class ControllerProd{
    private $modelCat;
    private $modelProd;
    private $modelImg;
    private $viewProd;
    private $authHelper;
    

    public function __construct(){              //constructores 
        $this->modelCat = new modelCat();
        $this->modelProd = new modelProd();
        $this->viewProd = new viewProductos();
        $this->authHelper = new AuthHelper();
        $this->modelImg= new modelImg();
       
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
        var_dump($id);
        $this->modelProd->eliminarProd($id);
        header("Location: " . INICIO);  
    }

    public function agregarProducto(){
        $this->authHelper->chequearUsuarioRegistrado(); //barrera
        $producto = $_POST['producto'];
        $graduacion=$_POST['graduacion'];
        $precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
        $imagenes=$_FILES;//guarda las img en la variable para pasar por parametro
        if(isset($producto) && isset($graduacion) && isset($precio)){ 
            $productoId = $this->modelProd->guardarProd($producto, $graduacion, $precio, $categoria);
            foreach($imagenes['imagesToUpload']['tmp_name'] as $key => $tmp_name){
                if($_FILES['imagesToUpload']['type'][$key] == "image/jpg" || $_FILES['imagesToUpload']['type'][$key] == "image/jpeg" || $_FILES['imagesToUpload']['type'][$key] == "image/png") {
                    $source=$tmp_name;
                    $name = $_FILES['imagesToUpload']['name'][$key];
                    $this->modelImg->guardarImagen($productoId, $name, $source); 
                }
            }
        }
        else {                
            $this->viewProd->error("Faltan datos obligatorios");
        }
        header('Location: '. INICIO);
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
        $imagenes=$_FILES;        
        if(isset($prod) && isset($grad) && isset($prec) && isset($categ)){  
            $this->modelProd->modificarProd($prod,$grad,$prec,$categ,$id_prod);
            foreach($imagenes['imagesToUpload']['tmp_name'] as $key => $tmp_name){
                if($_FILES['imagesToUpload']['type'][$key] == "image/jpg" || $_FILES['imagesToUpload']['type'][$key] == "image/jpeg" || $_FILES['imagesToUpload']['type'][$key] == "image/png") {
                    $source=$tmp_name;
                    $name = $_FILES['imagesToUpload']['name'][$key];
                    $this->modelImg->guardarImagen($id_prod, $name, $source); 
                    
                }
            }
            header("Location: " .  INICIO);
        }
        else {
            $this->viewProd->error("Faltan datos obligatorios");
        }
    }
    public function eliminarImg($params= null){
        $id_img= $params[':ID'];
        $this->modelImg->eliminarImg($id_img);
        header("Location: " .  INICIO);
    }

    public function mostrarDetalle($params=null){
        $id=$params[':ID'];
        $descripcion_produto=$this->modelProd->obtenerProducto($id);
        $categorias=$this->modelCat->obtenerCategorias();
        $imagen=$this->modelImg->traerImgProd($id);
        $this->viewProd->detalleProducto($descripcion_produto,$categorias,$imagen);
        
    }
}