{include file='header.tpl'}

<ul>
{foreach $productos as $producto}
    <li><h4>{$producto->producto}</h4> ${$producto->precio}{if isset($username)} 
    <a href="eliminar/{$producto->id_producto}">Eliminar</a> 
    <a href="editarProducto/{$producto->id_producto}">Editar</a>{/if}</li>

{/foreach}
</ul>
{if isset($username)}
    <div class="container">
        <form action="agregarProducto" method="POST">

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
                    <option value="1">Fermentados</option>
                    <option value="2">Destilados</option>
                    <option value="3">Licores</option>
                    <option value="6">Aguas</option>
                    <option value="7">Vinos</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar Producto</button>

            </form>

        <ul class="list-group mt-4">
        
    </div>
{/if}
{include file='footer.tpl'}