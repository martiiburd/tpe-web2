<?php
/* Smarty version 3.1.33, created on 2019-11-22 22:02:54
  from 'C:\xampp\htdocs\TPE-WEB2\tpe-web2\templates\viewTodosLosProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd84cfe1b5d12_27302180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24ace1c21c7ab67884029509296e678cb2b285b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\tpe-web2\\templates\\viewTodosLosProd.tpl',
      1 => 1574450053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:viewAgregarP.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd84cfe1b5d12_27302180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Nuestros Productos</h1>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <li><h4><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</h4>
    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?> 
        <a href="eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Eliminar</a> 
        <a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Editar</a>
        <a href="verDetalle/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Ver Detalle Producto</a>
    <?php }?></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender('file:viewAgregarP.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
