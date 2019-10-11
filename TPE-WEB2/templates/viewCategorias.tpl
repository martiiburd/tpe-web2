{include file='header.tpl'}
<h1>Categorias:</h1>
<ul>
{foreach $categorias as $categoria}
    <li> {$categoria->nombre} <a href="productos/{$categoria->id_categoria}">Ver Productos</a> <a href="eliminar/{$categoria->id_categoria}">Eliminar</a></li>
{/foreach}
</ul>

<div class="container">
    <form action="agregarCategoria" method="POST">

        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Nombre de la Categoria: </label>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>
        </div>
    
        <div class="form-group">
            <label>Descripcion</label>
            <textarea name="descripcion" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Categoria</button>

        </form>

    <ul class="list-group mt-4">
    
</div>

{include file='footer.tpl'}
