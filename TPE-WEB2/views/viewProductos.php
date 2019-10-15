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
        
        public function mostrarProductos($productos){
            $this->smarty->assign('productos', $productos);
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

        public function mostrarProdModificar($prod){
            $this->smarty->assign('productos', $prod);
            $this->smarty->display('templates/viewModificarProd.tpl');
        }
    }