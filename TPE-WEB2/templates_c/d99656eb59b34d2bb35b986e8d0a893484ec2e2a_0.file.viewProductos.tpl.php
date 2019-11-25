<?php
/* Smarty version 3.1.33, created on 2019-11-25 23:19:46
  from 'C:\xampp\htdocs\tpe-web2\TPE-WEB2\templates\viewProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc538297e9c7_18620515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99656eb59b34d2bb35b986e8d0a893484ec2e2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\TPE-WEB2\\templates\\viewProductos.tpl',
      1 => 1574720349,
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
function content_5ddc538297e9c7_18620515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <li><h4><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</h4>
        <?php if (($_smarty_tpl->tpl_vars['tipoUsuario']->value == "1")) {?>
            <a href="eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Eliminar</a> 
            <a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Editar</a>
        <?php }?>
        <a href="verDetalle/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Ver Detalle Producto</a>
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
