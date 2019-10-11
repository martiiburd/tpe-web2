<?php
/* Smarty version 3.1.33, created on 2019-10-11 01:44:59
  from 'C:\xampp\htdocs\TPE-WEB2\tpe-web2\templates\viewCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fc27b037208_86624741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86287631c6b14694c2b28e33d896913cd26a1706' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\tpe-web2\\templates\\viewCategorias.tpl',
      1 => 1570751092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d9fc27b037208_86624741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Categorias:</h1>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
    <li> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 <a href="productos/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Ver Productos</a> <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Eliminar</a></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<div class="container">
    <form action="agregarCategoria" method="POST">

        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Nombre de la Categoria: </label>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>
        </div>
    
        <div class="form-group">
            <label>Descripcion</label>
            <textarea name="descripcion" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Categoria</button>

        </form>

    <ul class="list-group mt-4">
    
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
