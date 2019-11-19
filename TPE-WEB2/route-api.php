<?php
    require_once("Router.php");
    require_once("./api/api_comentario_controller.php");

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    $r->addRoute("comentarios", "GET", "api_comentario_controller","obtenerComentario");
    $r->addRoute("comentarios/:ID", "DELETE", "api_comentario_controller", "eliminarComentario");
    $r->addRoute();
    // echo ("hola");


    $r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 