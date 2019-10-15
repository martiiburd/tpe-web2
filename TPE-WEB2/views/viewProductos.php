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
        }
        
        public function mostrarProductos($productos, $categorias){
            $this->smarty->assign('productos', $productos);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/viewProductos.tpl');
          
        }

        public function mostrarTodosLosProductos($productos){
            $this->smarty->assign('productos', $productos);
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
    }