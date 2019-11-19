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
            <input type="password" name="contrasena" class="form-control" placeholder="cotraseña">
        </div>
    </div>
    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="direccion" class="form-control" placeholder="1234 Main St">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Ciudad</label>
            <input type="text" name="ciudad" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox"name="verificado">
            <label class="form-check-label">
            Check me out
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>

{include 'templates/footer.tpl'}