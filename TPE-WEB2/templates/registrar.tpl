{include 'templates/header.tpl'}
<form action="guardarUsuario" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="col">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label>Contraseña</label>
            <input type="password" name="contrasena" class="form-control" placeholder="contraseña">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>

{include 'templates/footer.tpl'}