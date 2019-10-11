{include file='header.tpl'}

<ul>
{foreach $productos as $producto}
    <li> {$producto->producto} {$producto->precio} <a href="eliminar/{$producto->id_producto}">Eliminar</a></li>

{/foreach}
</ul>
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

        <button type="submit" class="btn btn-primary">Guardar Producto</button>

        </form>

    <ul class="list-group mt-4">
    
</div>

{include file='footer.tpl'}