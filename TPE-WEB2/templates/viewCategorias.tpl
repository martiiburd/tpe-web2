{include file='header.tpl'}

<ul>
{foreach $categorias as $categoria}
    <li> {$categoria->nombre} <a href="productos/{$categoria->id_categoria}">Ver Productos</a></li>
{/foreach}
</ul>

{include file='footer.tpl'}
