<?php
    require_once("controllers/controller.php");
    require_once("controllers/loginController.php");
    require_once("Router.php");
     // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("INICIO", BASE_URL . 'inicio');
 
    $r = new Router();

    $r->addRoute('inicio', 'GET', 'Controller', 'mostrarCategorias'); //lleva al inicio de la pagina y genera el mostrar las categorias//
    $r->addRoute('productos/:ID', 'GET', 'Controller', 'mostrarProducto'); //lleva a los productos, muestra nombre de la cat, detalle, y los productos
    $r->addRoute('agregarCategoria', 'POST', 'Controller', 'agregarCategoria'); //lleva al form para agregar una categoria
    $r->addRoute('verProductos', 'GET', 'Controller', 'mostrarTodosLosProductos');
    $r->addRoute('ofertas','GET', 'Controller', 'obtenerOfertas'); //le pide a la bbdd a traves de Join los menores precios y los muestra
    $r->addRoute('login', 'GET', 'LoginController','iniciarSesion');
    $r->addRoute('verify', 'POST', 'LoginController','verificarUsuario');
    $r->addRoute('logout', 'GET', 'LoginController','logout');
    //ruta por defecto
    $r->setDefaultRoute('Controller', 'mostrarCategorias');

    //run(magia)
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 