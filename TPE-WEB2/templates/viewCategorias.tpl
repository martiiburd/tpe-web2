{include file='header.tpl'}
<h1>Categorias:</h1>
<ul>
{foreach $categorias as $categoria}
    <li> {$categoria->nombre} <a href="productos/{$categoria->id_categoria}">Ver Productos</a></li>
{/foreach}
</ul>
{include file='footer.tpl'}
