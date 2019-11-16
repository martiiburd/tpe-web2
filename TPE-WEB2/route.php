<?php
    require_once("controllers/controllerProd.php");
    require_once("controllers/controllerCat.php");
    require_once("controllers/loginController.php");
    require_once("Router.php");
     // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("INICIO", BASE_URL . 'inicio');
    define("VERTODO", BASE_URL .'verProductos');
   
 
    $r = new Router();

    $r->addRoute('inicio', 'GET', 'ControllerCat', 'mostrarCategorias'); //lleva al inicio de la pagina y genera el mostrar las categorias//
    $r->addRoute('productos/:ID', 'GET', 'ControllerProd', 'mostrarProducto'); //lleva a los productos, muestra nombre de la cat, detalle, y los productos
    $r->addRoute('verProductos', 'GET', 'ControllerProd', 'mostrarTodosLosProductos');
    $r->addRoute('ofertas','GET', 'ControllerProd', 'obtenerOfertas'); //le pide a la bbdd a traves de Join los menores precios y los muestra
    $r->addRoute('login', 'GET', 'LoginController','iniciarSesion');
    $r->addRoute('verify', 'POST', 'LoginController','verificarUsuario');
    $r->addRoute('logout', 'GET', 'LoginController','logout');
    $r->addRoute('eliminarProducto/:ID', 'GET', 'ControllerProd', 'eliminarProducto');
    $r->addRoute('eliminarCategoria/:ID', 'GET', 'ControllerCat', 'eliminarCategoria');
    $r->addRoute('agregarCategoria', 'POST', 'ControllerCat', 'agregarCategoria'); //lleva al form para agregar una categoria
    $r->addRoute('agregarProducto', 'POST', 'ControllerProd', 'agregarProducto');
    $r->addRoute('editarProducto/:ID', 'GET', 'ControllerProd', 'traerProductoModificar');
    $r->addRoute('editarProducto', 'POST', 'ControllerProd', 'modificarProducto');
    $r->addRoute('editarCategoria/:ID', 'GET', 'ControllerCat', 'traerCategoriaModificar');
    $r->addRoute('editarCategoria', 'POST', 'ControllerCat', 'modificarCategoria');
    $r->addRoute('mostrarImagen/:ID', 'GET', 'ControllerProd', 'mostrarImg');
    $r->addRoute('eliminarImagen/:ID', 'GET', 'ControllerProd', 'eliminarImg');

    //ruta por defecto
    $r->setDefaultRoute('ControllerCat', 'mostrarCategorias');

    //run(magia)
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 