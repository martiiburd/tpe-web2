<?php
    require_once('libs/Smarty.class.php');

    class viewCategorias {
        
        private $smarty;
        public function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('titulo', 'Categorías');
            $this->smarty->assign('basehref', BASE_URL);
        }
        
        public function mostrarCategorias($categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/viewCategorias.tpl');
            
        }
        
    }

