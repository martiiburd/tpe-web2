<?php
    require_once("controllers/controllerAdmin.php");

    if($_GET['action'] == '')
        $_GET['action'] = 'inicio';

        
    $partesURL=explode('/', $_GET['action']);

    switch ($partesURL[0]) {
        case 'inicio':   //lleva al inicio de la pagina y genera el mostrar las categorias//
            $controller = new ControllerAdministrador(); 
            $controller-> mostrarCategorias();
            break;

        default:
            echo "<h1>Error 404 - Page not found </h1>";
        break;
    }
    