<?php
/* Smarty version 3.1.33, created on 2019-10-04 23:53:52
  from 'C:\xampp\htdocs\tpe-web2\TPE-WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d97bf703adaa1_16277910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '524923f0821e62d4f6aa951c0c104436729fbd34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\TPE-WEB2\\templates\\header.tpl',
      1 => 1570225928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d97bf703adaa1_16277910 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
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
        <?php if (isset($_smarty_tpl->tpl_vars['userName']->value)) {?>
         <div class="navbar-nav ml-auto">
            <span class="navbar-text"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span>
            <a class="nav-item nav-link" href="logout">Cerrar Sesion</a>
        </div>
        <?php }?>
    </div>
    </nav><?php }
}
