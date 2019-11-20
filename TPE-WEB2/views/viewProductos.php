<?php
    require_once('libs/Smarty.class.php');

    class viewProductos{
        
        private $smarty;
        public function __construct() {
            $this->smarty = new Smarty();
            $authHelper = new AuthHelper();
            $this->smarty->assign('titulo', 'Productos');
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('username', $authHelper->obternerNombreUsuario());
            $this->smarty->assign('userid', $authHelper->obternerIdUsuario());
        }
        
        public function mostrarProductos($productos, $categorias){
            $this->smarty->assign('productos', $productos);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/viewProductos.tpl');
          
        }

        public function mostrarTodosLosProductos($productos, $categorias){
            $this->smarty->assign('productos', $productos);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/viewTodosLosProd.tpl');
        }

        public function mostrarOfertas($productos){
            $this->smarty->assign('productos',$productos);
            $this->smarty->display('templates/viewOfertas.tpl');
        }
        
        public function error($msgError){
            $this->smarty->assign('msgError', $msgError);
            $this->smarty->display('templates/viewError.tpl');

        }

        public function mostrarProdModificar($prod,$categorias){
            $this->smarty->assign('producto', $prod);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/viewModificarProd.tpl');
        }

        public function agregarProd($idProducto,$categorias){
            $this->smarty->assign('productos', $idProducto);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/viewAgregarP.tpl');

        }
        public function detalleProducto($descripcion_produto,$categorias,$imagenes){
            $this->smarty->assign('producto', $descripcion_produto);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('imagenes', $imagenes);
            $this->smarty->display('templates/viewDetalleProd.tpl');

        }
    }