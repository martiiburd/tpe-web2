{include file='header.tpl'}
<div class="productos">
    <input id="id-prod"  type="hidden" class="form-control" value="{$producto->id_producto}">
    <input id="tipo-usu" type="hidden" class="form-control" value="{$tipoUsuario}">
    <h1>{$producto->producto}</h1>
    <h4>Precio: ${$producto->precio}</h4>
    <h4>Graduacion: {$producto->graduacion}%</h4>
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
            <h4>No hay imagen de este producto!</h4>
    {/if}
    <div id="comentarios" class="col-md-6">
        {include 'vue/comentarios.tpl'}
    </div>
    {if ($promedio->prom!='0')}
        <h4>Promedio de puntaje: {$promedio->prom}</h4>
    {/if}
    {if isset($username)}
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
</div>    
<script src="js/comentarios.js"></script>
{include file='footer.tpl'}