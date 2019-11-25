{include file='header.tpl'}
{if ($tipoUsuario=="1")}
    {if isset($username)}
        <div class="container">
            <form action="editarProducto" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label>ID del Producto: </label>
                            <input name="id_prod"  type="hidden" class="form-control" value="{$producto->id_producto}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre del Producto: </label>
                            <input name="prod" type="text" class="form-control" value="{$producto->producto}">
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <label>Graduacion Alcoholica</label>
                    <input name="grad" type= "number" class="form-control" value="{$producto->graduacion}">
                </div>

                <div class="form-group">
                    <label>Precio del Producto</label>
                    <input name="prec" type= "number" class="form-control" value="{$producto->precio}">
                </div>
                <div class="form-group">
                    <select name="categ" >
                        {foreach $categorias as $categoria}
                            <option value="{$categoria->id_categoria}"{if (!isset($producto->id_categoria_fk))||($categoria->id_categoria==$producto->id_categoria_fk)} selected {/if}>{$categoria->nombre}</option>
                        {/foreach}
                    </select>
                </div>
                <input type="file" name="imagesToUpload[]"  multiple>
                
                <button type="submit" class="btn btn-primary">Modificar</button>

                </form>

            <ul class="list-group mt-4">
            
        </div>
    {/if}
{/if}
{include file='footer.tpl'}