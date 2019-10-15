
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
                    {foreach $categorias as $categoria}
                        <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                    {/foreach}
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar Producto</button>

            </form>

        <ul class="list-group mt-4">
        
    </div>
{/if}