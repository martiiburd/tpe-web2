{include file='header.tpl'}
{if $imagenes}
     {foreach $imagenes as $imagen}
        <div>
            <img id="imagen" src="{$imagen->ruta_img}">
            <a href="eliminarImagen/{$imagen->id_img}">Eliminar</a>
        </div>
    {/foreach}

    {else !$imagenes}
        <h1>No hay imagen de este producto</h1>
{/if}
<a href="inicio">Volver</a>

{include file='footer.tpl'}