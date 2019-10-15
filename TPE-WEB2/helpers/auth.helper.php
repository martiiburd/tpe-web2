<?php

class AuthHelper{
    public function __construct(){
        // inicia siempre la sesion si no esta iniciada
        if(session_status() !=PHP_SESSION_ACTIVE)
            session_start();
    } 

    public function login($usuario){
        $_SESSION['id_usuario']=$usuario->id_usuario;
        $_SESSION['nombre']=$usuario->nombre;
    }  
    public function logout(){
        session_destroy();
    }
    public function chequearUsuarioRegistrado(){
        if(!isset($_SESSION['id_usuario'])){
            header('Location:' . LOGIN);
            die();
        }
    }
    public function obternerNombreUsuario(){
       
        if (isset($_SESSION['nombre']))    
            return $_SESSION['nombre'];
        else return null;

    }

}
