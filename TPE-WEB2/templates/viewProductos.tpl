{include file='header.tpl'}
<ul>
{foreach $productos as $producto}
    <li><h4>{$producto->producto}</h4>
        {if isset($username)} 
            <a href="eliminarProducto/{$producto->id_producto}">Eliminar</a> 
            <a href="editarProducto/{$producto->id_producto}">Editar</a>
            <a href="verDetalle/{$producto->id_producto}">Ver Detalle Producto</a>
        {/if}
    </li>

{/foreach}
</ul>
{include file='viewAgregarP.tpl'}
{include file='footer.tpl'}