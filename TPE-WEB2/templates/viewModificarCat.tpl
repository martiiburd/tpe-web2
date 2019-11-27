{include file='header.tpl'}
<div class="productos">
{if ($tipoUsuario=="1")}
    {if isset($username)}
        <div class="container">
            <h2>Modificar Categoria: </h2> <h4>"{$categoria->nombre}"</h4>
            <form action="editarCategoria" method="POST">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Id de la Categoria: </label>
                            <input  name="id_cat" type="hidden" class="form-control" value="{$categoria->id_categoria}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre de la Categoria: </label>
                            <input name="nomb" type="text" class="form-control" value="{$categoria->nombre}">
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descri" class="form-control" rows="3">{$categoria->descripcion}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Modificar</button>

                </form>

            <ul class="list-group mt-4">
            
        </div>
    {/if}
{/if}
</div>
{include file='footer.tpl'}
