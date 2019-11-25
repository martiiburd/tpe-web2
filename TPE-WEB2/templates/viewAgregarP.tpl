{if isset($username)}
    {if ($tipoUsuario=="1")}
        <div class="container">
            <form action="agregarProducto" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre del Producto: </label>
                            <input name="producto" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <label>Graduacion Alcoholica</label>
                    <input name="graduacion" type= "number" class="form-control">
                </div>

                <div class="form-group">
                    <label>Precio del Producto</label>
                    <input name="precio" type= "number" class="form-control">
                </div>
                <div class="form-group">
                    <select name="categoria" >
                        {foreach $categorias as $categoria}
                            <option value="{$categoria->id_categoria}"{if (!isset($producto->id_categoria_fk)||($categoria->id_categoria==$producto->id_categoria_fk))} selected {/if}>{$categoria->nombre}</option>
                        {/foreach}
                    </select>
                </div>
                
                <input type="file" name="imagesToUpload[]" multiple>
                
                <button type="submit" class="btn btn-primary">Guardar Producto</button>

                </form>

            <ul class="list-group mt-4">
            
        </div>
    {/if}
{/if}    