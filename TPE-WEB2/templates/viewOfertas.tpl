{include file='header.tpl'}
<h2>¡ofertas!</h2>
<ul>
{foreach $productos as $producto}
        <li>{$producto->nombre} - {$producto->producto}  ${$producto->precio} </li>
{/foreach}
</ul>

{include file='footer.tpl'}