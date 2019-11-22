<?php
require_once('libs/Smarty.class.php');
require_once('helpers/auth.helper.php');
class LoginView{
    private $smarty;

    public function __construct(){
        $this->smarty= new Smarty();
        $authHelper = new AuthHelper();
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('username', $authHelper->obternerNombreUsuario());
        $this->smarty->assign('userid', $authHelper->obternerIdUsuario());
    }
    public function verLogin($error=null){
        $this->smarty->assign('titulo','Iniciar Sesion');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
    public function verRegistro($error=null){
        $this->smarty->assign('titulo','Registrate');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/registrar.tpl');
    }
    public function verUsuarios($usuarios){
        $this->smarty->assign('titulo','Usuarios');
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templates/usuarios.tpl');
        
    }
    

}