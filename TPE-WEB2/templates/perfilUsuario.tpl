{include file='templates/header.tpl'}
<div class="perfil_usuario">
    <h1>Mi Perfil</h1>
    <table>
        <tr>
            <th class="perfilUsuario">Nombre:</th>
            <td>{$usuario->nombre_u}</td>
        </tr>
        <tr>
            <th class="perfilUsuario">Apellido:</th>
            <td>{$usuario->apellido_u}</td>
        </tr>
        <tr>
            <th class="perfilUsuario">Mail:</th>
            <td>{$usuario->nombre}</td>
        </tr>
    </table>
<div>
{include file='templates/footer.tpl'}