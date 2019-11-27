{include file='header.tpl'}
<div class="productos">
    <h2>¡Ofertas!</h2>
    <ul>
    {foreach $productos as $producto}
            <li>{$producto->nombre} - {$producto->producto}  ${$producto->precio}</li>
    {/foreach}
    </ul>
</div>
{include file='footer.tpl'}