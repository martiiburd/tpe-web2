{include file='header.tpl'}
<h1>Nuestros Productos</h1>
<ul>
{foreach $productos as $producto}
    <li><h4>{$producto->producto}</h4>Precio: ${$producto->precio} Graduacion: {$producto->graduacion}%
    {if isset($username)} 
        <a href="eliminarProducto/{$producto->id_producto}">Eliminar</a> 
        <a href="editarProducto/{$producto->id_producto}">Editar</a>
        <a href="mostrarImagen/{$producto->id_producto}">Mostrar Imagen</a>
    {/if}</li>
{/foreach}
</ul>
{include file='viewAgregarP.tpl'}
{include file='footer.tpl'}