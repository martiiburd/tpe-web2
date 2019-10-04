<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{$basehref}">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>{$titulo}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
     <img src='img/logo.jpg'class = "logo">
    <a class="navbar-brand"  href="inicio">Calavera No Chilla</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navba rNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="verProductos">Productos</a>
        </div>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="ofertas">Ofertas</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="login">Iniciar Sesion</a>
        </div>
        {if isset($userName)}
         <div class="navbar-nav ml-auto">
            <span class="navbar-text">{$userName}</span>
            <a class="nav-item nav-link" href="logout">Cerrar Sesion</a>
        </div>
        {/if}
    </div>
    </nav>