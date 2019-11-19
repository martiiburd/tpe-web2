<?php
include_once('./models/modelUsuario.php');
include_once('./views/loginView.php');  
include_once('./helpers/auth.helper.php');

class LoginController{
    private $view;
    private $model;
    private $authHelper;

    public function __construct(){
        $this->view = new LoginView();
        $this->model = new ModelUsuario();
        $this->authHelper = new AuthHelper();
    }
    public function iniciarSesion(){
        $this->view->verLogin();
    } 

    public function verificarUsuario(){
        $nombre= $_POST['nombre'];
        $contrasena= $_POST['contraseña'];
        $usuario= $this->model->recibirNombreUsuario($nombre);
        if(!empty($usuario) && password_verify($contrasena, $usuario->contrasena)){
            $this->authHelper->login($usuario);
            header('Location: ' . INICIO);

        }
        else{
            $this->view->verLogin("Login Incorrecto");
        }
    }
    public function logout(){
        $this->authHelper->logout();
        header('Location: '. LOGIN);
    }
    public function registrarse(){
        $this->view->verRegistro();
    }
}