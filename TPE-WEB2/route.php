<?php
    require_once("controllers/controller.php");

    if($_GET['action'] == '')
        $_GET['action'] = 'inicio';

        
    $partesURL=explode('/', $_GET['action']);

    switch ($partesURL[0]) {
        case 'inicio':
            $controller = new BebidaController(); //Drinking 
            $controller-> //funcion para ver el inicio;
            break;

        case 'quienes_somos': 
            $controller = new BebidasController();
            $controller-> // funcion para ver html
            break;
        
        case 'productos':
            $controller = new BebidasController();
            $controller-> //funcion para ver los productos
            //posible formulario para cargar,eliminar,editar. 
            break;

        case 'promos':
            $controller = new BebidasController();
            $controller-> // funcion para ver bebidas de menor precio
            break;

        case 'contactanos':
            $controller = new BebidasController();
            $controller-> // funcion para enviar datos
            break;
        
            default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }
    