{include file='header.tpl'}

<ul>
{foreach $productos as $producto}
    <li> {$producto->producto} {$producto->precio}</li>

{/foreach}
</ul>

{include file='footer.tpl'}