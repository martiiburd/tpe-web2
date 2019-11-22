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

    $r->addRoute('inicio', 'GET', 'controllerCat', 'mostrarCategorias'); //lleva al inicio de la pagina y genera el mostrar las categorias//
    $r->addRoute('productos/:ID', 'GET', 'controllerProd', 'mostrarProducto'); //lleva a los productos, muestra nombre de la cat, detalle, y los productos
    $r->addRoute('verProductos', 'GET', 'controllerProd', 'mostrarTodosLosProductos');
    $r->addRoute('ofertas','GET', 'controllerProd', 'obtenerOfertas'); //le pide a la bbdd a traves de Join los menores precios y los muestra
    $r->addRoute('login', 'GET', 'loginController','iniciarSesion');
    $r->addRoute('verify', 'POST', 'loginController','verificarUsuario');
    $r->addRoute('logout', 'GET', 'loginController','logout');
    $r->addRoute('eliminarProducto/:ID', 'GET', 'controllerProd', 'eliminarProducto');
    $r->addRoute('eliminarCategoria/:ID', 'GET', 'controllerCat', 'eliminarCategoria');
    $r->addRoute('agregarCategoria', 'POST', 'controllerCat', 'agregarCategoria'); //lleva al form para agregar una categoria
    $r->addRoute('agregarProducto', 'POST', 'controllerProd', 'agregarProducto');
    $r->addRoute('editarProducto/:ID', 'GET', 'controllerProd', 'traerProductoModificar');
    $r->addRoute('editarProducto', 'POST', 'controllerProd', 'modificarProducto');
    $r->addRoute('editarCategoria/:ID', 'GET', 'controllerCat', 'traerCategoriaModificar');
    $r->addRoute('editarCategoria', 'POST', 'controllerCat', 'modificarCategoria');
    $r->addRoute('eliminarImagen/:ID', 'GET', 'controllerProd', 'eliminarImg');
    $r->addRoute('registrar', 'GET', 'loginController', 'registrarse');
    $r->addRoute('guardarUsuario', 'POST', 'loginController', 'saveUsuario');
    $r->addRoute('verDetalle/:ID','GET','controllerProd','mostrarDetalle');
    $r->addRoute('verListaUsuarios', 'GET', 'loginController', 'mostrarUsuarios');
    $r->addRoute('eliminarUsuario/:ID', 'GET','loginController', 'borrarUsuario');
    $r->addRoute('agregarComoAdmin/:ID', 'POST', 'loginController', 'cambiarComoAdmin');
    //ruta por defecto
    $r->setDefaultRoute('ControllerCat', 'mostrarCategorias');

    //run(magia)
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 