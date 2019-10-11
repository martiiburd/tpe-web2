<?php
/* Smarty version 3.1.33, created on 2019-10-11 01:51:55
  from 'C:\xampp\htdocs\TPE-WEB2\tpe-web2\templates\viewProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fc41b13e0f0_37915718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84c3c2743b2768939ce26dde669f1d5fca39d460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\tpe-web2\\templates\\viewProductos.tpl',
      1 => 1570751472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d9fc41b13e0f0_37915718 (Smarty_Internal_Template $_smarty_tpl) {
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
 <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Eliminar</a></li>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<div class="container">
    <form action="agregarProducto" method="POST">

        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Nombre del Producto: </label>
                    <input name="producto" type="text" class="form-control">
                </div>
            </div>
        </div>
    
        <div class="form-group">
            <label>Graduacion Alcoholica</label>
            <input name="graduacion" type= "number" class="form-control">
        </div>

        <div class="form-group">
            <label>Precio del Producto</label>
            <input name="precio" type= "number" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Producto</button>

        </form>

    <ul class="list-group mt-4">
    
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
