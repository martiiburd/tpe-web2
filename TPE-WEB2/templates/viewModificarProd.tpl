{include file='header.tpl'}

{foreach $productos as $producto}
    <h5> Nombre: {$producto->producto}</h5>
    <p>Precio: ${$producto->precio} </p>
    <p>Graduacion Alcoholica: {$producto->graduacion}</p>
    <p>Categoria a la que pertenece: {$producto->nombre}</p>
{/foreach}

{if isset($username)}
    <div class="container">
        <form action="editarProducto" method="POST">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label>ID del Producto: </label>
                        <input name="id_prod" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label>Nombre del Producto: </label>
                        <input name="prod" type="text" class="form-control">
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                <label>Graduacion Alcoholica</label>
                <input name="grad" type= "number" class="form-control">
            </div>

            <div class="form-group">
                <label>Precio del Producto</label>
                <input name="prec" type= "number" class="form-control">
            </div>
            <div class="form-group">
                <select name="categ" >
                    <option value="1">Fermentados</option>
                    <option value="2">Destilados</option>
                    <option value="3">Licores</option>
                    <option value="6">Aguas</option>
                    <option value="7">Vinos</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Modificar</button>

            </form>

        <ul class="list-group mt-4">
        
    </div>
{/if}
{include file='footer.tpl'}