<?php
    require_once("controllers/controllerUsuario.php");

    if($_GET['action'] == '')
        $_GET['action'] = 'inicio';

        
    $partesURL=explode('/', $_GET['action']);

    switch ($partesURL[0]) {
        case 'inicio':   //lleva al inicio de la pagina y genera el mostrar las categorias//
            $controller = new ControllerUsuario(); 
            $controller-> mostrarCategorias();
        break;
        case 'productos': //lleva a los productos, muestra nombre de la cat, detalle, y los productos
            $controller = new ControllerUsuario();
            $controller-> mostrarProducto($partesURL[1]);
        break;
        default:
            echo "<h1>Error 404 - Page not found </h1>";
        break;
    }
    