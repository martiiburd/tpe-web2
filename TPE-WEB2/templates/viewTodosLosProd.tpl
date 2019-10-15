{include file='header.tpl'}
 <h1>Nuestros Productos</h1>
<ul>
{foreach $productos as $producto}
    <li><h4>{$producto->producto}</h4></li>
{/foreach}
</ul>

{include file='footer.tpl'}