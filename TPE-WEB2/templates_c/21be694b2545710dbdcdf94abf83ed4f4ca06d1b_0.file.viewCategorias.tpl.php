<?php
/* Smarty version 3.1.33, created on 2019-11-26 22:17:49
  from 'C:\xampp\htdocs\tpe-web2\TPE-WEB2\templates\viewCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd967db5c505_78907935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21be694b2545710dbdcdf94abf83ed4f4ca06d1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\TPE-WEB2\\templates\\viewCategorias.tpl',
      1 => 1574803058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddd967db5c505_78907935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Categorias:</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
    <h4><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h4><a href="productos/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Ver Productos</a> 
    <?php if (($_smarty_tpl->tpl_vars['tipoUsuario']->value == "1")) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
            <a href="eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Eliminar</a>
            <a href="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Editar</a>
        <?php }?>
    <?php }?>
    <p><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (($_smarty_tpl->tpl_vars['tipoUsuario']->value == "1")) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
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
    <?php }
}
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
