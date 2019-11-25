{include file='header.tpl'}
{if isset($username)}
    <input id="id-prod"  type="hidden" class="form-control" value="{$producto->id_producto}">
    <h3>{$producto->producto}</h3> Precio: ${$producto->precio} Graduacion: {$producto->graduacion}%
    {if $imagenes}
        {foreach $imagenes as $imagen}
            <div>
                <img id="imagen" src="{$imagen->ruta_img}">
                {if ($tipoUsuario=="1")}
                    <a href="eliminarImagen/{$imagen->id_img}">Eliminar</a>
                {/if}
            </div>
        {/foreach}
        {else !$imagenes}
            <h1>No hay imagen de este producto</h1>
    {/if}
    <div id="comentarios" class="col-md-6">
        {include 'vue/comentarios.tpl'}
    </div> 
    <form>
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Comentario: </label>
                    <input type="text" class="comentario form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Puntaje del producto</label>
            <select class="puntaje" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <select class="producto" >
                <option value="{$producto->id_producto}">{$producto->producto}</option>
            </select>
        </div>
        <div class="form-group">
            <select class="usuario" >
                <option value="{$userid}">{$username}</option>
            </select>
        </div>
        <button type="button" class="btncomentario btn btn-primary">Comentar</button>
    </form>
    <a href="inicio">Volver</a>
{/if}

<script src="js/comentarios.js"></script>
{include file='footer.tpl'}