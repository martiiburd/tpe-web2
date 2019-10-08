<?php
    require_once('libs/Smarty.class.php');

    class viewCategorias {
        
        private $smarty;
        public function __construct() {
            $this->smarty = new Smarty();
            $authHelper = new AuthHelper();

            $this->smarty->assign('titulo', 'Categorías');
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('username', $authHelper->obternerNombreUsuario());
        }
        
        public function mostrarCategorias($categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('templates/viewCategorias.tpl');
            
        }
        public function error($msgError){
            $this->smarty->assign('msgError', $msgError);
            $this->smarty->display('templates/viewError.tpl');

        }
        
    }

