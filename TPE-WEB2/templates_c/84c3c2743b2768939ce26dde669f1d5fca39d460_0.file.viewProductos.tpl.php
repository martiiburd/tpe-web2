<?php
/* Smarty version 3.1.33, created on 2019-10-02 20:42:22
  from 'C:\xampp\htdocs\TPE-WEB2\tpe-web2\templates\viewProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d94ef8ea3ae17_58561391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84c3c2743b2768939ce26dde669f1d5fca39d460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\tpe-web2\\templates\\viewProductos.tpl',
      1 => 1569965366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d94ef8ea3ae17_58561391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <li> <?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
 <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
