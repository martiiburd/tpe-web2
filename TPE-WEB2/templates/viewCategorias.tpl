{include file='header.tpl'}
<h1>Categorias:</h1>
{foreach $categorias as $categoria}
    <h4>{$categoria->nombre}</h4><a href="productos/{$categoria->id_categoria}">Ver Productos</a> 
    {if ($tipoUsuario=="1")}
        {if isset($username)}
            <a href="eliminarCategoria/{$categoria->id_categoria}">Eliminar</a>
            <a href="editarCategoria/{$categoria->id_categoria}">Editar</a>
        {/if}
    {/if}
    <p>{$categoria->descripcion}</p>
{/foreach}
{if ($tipoUsuario=="1")}
    {if isset($username)}
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
    {/if}
{/if}
{include file='footer.tpl'}
