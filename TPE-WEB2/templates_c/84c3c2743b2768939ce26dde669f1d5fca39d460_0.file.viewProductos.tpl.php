<?php
/* Smarty version 3.1.33, created on 2019-11-09 00:50:05
  from 'C:\xampp\htdocs\TPE-WEB2\tpe-web2\templates\viewProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc5ff2d462fc4_34714799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84c3c2743b2768939ce26dde669f1d5fca39d460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\tpe-web2\\templates\\viewProductos.tpl',
      1 => 1573255762,
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
function content_5dc5ff2d462fc4_34714799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <li><h4><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</h4> $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>

    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?> 
        <a href="eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Eliminar</a> 
        <a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Editar</a>
        <a href="mostrarImagen/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Mostrar Imagen</a>
    <?php }?>
    </li>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender('file:viewAgregarP.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
