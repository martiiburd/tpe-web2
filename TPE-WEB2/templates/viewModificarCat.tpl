{include file='header.tpl'}
{foreach $categorias as $categoria}
    <h5> Nombre: {$categoria->nombre}</h5>
    <p> Descripcion: {$categoria->descripcion}</p>
{/foreach}
{if isset($username)}
    <div class="container">
        <form action="editarCategoria" method="POST">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label>Id de la Categoria: </label>
                        <input name="id_cat" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label>Nombre de la Categoria: </label>
                        <input name="nomb" type="text" class="form-control">
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                <label>Descripcion</label>
                <textarea name="descri" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Modificar</button>

            </form>

        <ul class="list-group mt-4">
        
    </div>
{/if}
{include file='footer.tpl'}
