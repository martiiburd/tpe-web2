<?php
    require_once('libs/Smarty.class.php');

    class viewProductos{
        
        private $smarty;
        public function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('titulo', 'Productos');
            $this->smarty->assign('basehref', BASE_URL);
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
        
    }