<?php

class AuthHelper{
    public function __construct(){} 

    public function login($usuario){
        session_start();
        $_SESSION['id_usuario']=$usuario->id;
        $_SESSION['nombre']=$usuario->nombre;
    }  
    public function logout(){
        session_start();
        session_destroy();
    }
    public function chequearUsuarioRegistrado(){
        session_start();
        if(!isset($_SESSION['id_usuario'])){
            header('Location:' . LOGIN);
            die();
        }
    }
    public function obternerNombreUsuario(){
        if(session_status() !=PHP_SESSION_ACTIVE)
            session_start();
        if (isset($_SESSION['nombre']))    
            return $_SESSION['nombre'];
        else return null;

    }

}
