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
        
        $nombre = $_POST['nombre'];
        $descripcion=$_POST['descripcion'];

        
        // preguntar como hacer para no agregar categorias con el mismo nombre 
        // if($nombre == $categoria->nombre)

            // $this->authHelper->chequearUsuarioRegistrado(); //barrera
            $this->modelCat->guardarCat($nombre, $descripcion);
            header('Location: ' . INICIO);
        
        // else {
            // $this->viewCat->error("Faltan datos obligatorios");
        // }
    }

    public function agregarProducto(){
        $producto = $_POST['producto'];
        $graduacion=$_POST['graduacion'];
        $precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
            // $id_cat=mostrarProducto($id);        COMO AGREGAR PROD DEPENDE DEL ID DE CATEGORIA
            var_dump($producto,$graduacion,$precio);

            if(isset($producto) && isset($graduacion) && isset($precio)){
                
                // $agregar = true;                 preguntar como hacer para no agregar productos con el mismo nombre
                $this->modelProd->guardarProd($producto, $graduacion, $precio,$categoria);
                header('Location: ' . INICIO);
            }
            else {
                //como hacemos para que ademas del error muestre el form
                $this->viewProd->error("Faltan datos obligatorios");
                
            }
        
        
    }

    public function traerProductoModificar($params = null){
        $id_prod= $params[':ID'];
        $producto=$this->modelProd->descripcionProd($id_prod);
        $this->viewProd->mostrarProdModificar($producto);
    }

    public function modificarProducto(){
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
        var_dump($categ); die();
        $this->viewCat->mostrarCatModificar($categ);
    }
    public function modificarCategoria(){
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