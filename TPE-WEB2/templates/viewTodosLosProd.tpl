{include file='header.tpl'}
 <h1>Nuestros Productos</h1>
<ul>
{foreach $productos as $producto}

    <li> {$producto->producto}</li>
{/foreach}
</ul>

{include file='footer.tpl'}