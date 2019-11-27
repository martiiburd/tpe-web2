{include file='header.tpl'}
<div class="productos">
    <h1>Nuestros Productos</h1>
    <ul>
    {foreach $productos as $producto}
        <li><h4>{$producto->producto}</h4>
            <a href="verDetalle/{$producto->id_producto}">| Ver Detalle Producto</a>
            {if ($tipoUsuario=="1")}
                <a href="editarProducto/{$producto->id_producto}">| Editar |</a>
                <a href="eliminarProducto/{$producto->id_producto}">Eliminar |</a> 
            {/if}
        </li>
    {/foreach}
    </ul>
</div>    
{include file='viewAgregarP.tpl'}
{include file='footer.tpl'}