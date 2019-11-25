{include file='header.tpl'}
{if isset($username)}
    <h2>Usuarios-Administradores</h2>
    <table class="tablaUsuario col-md-10" >
        <tr>
            <th>Mail</th>
            <th>Tipo de Usuario</th>
            <th>Eliminar</th>        
        </tr>
        {foreach $usuarios as $usuario}
            <tr>
                <td>
                    {$usuario->nombre} {$usuario->usuario_admin}
                </td> 
                <td>
                    <form action="agregarComoAdmin/{$usuario->id_usuario}" method="POST">
                        <select name="elegirAdmin">
                        <option value="0">Usuario</option>
                        <option value="1">Administrador</option>
    
                    </select>
                    <button type="submit">Cambiar</button>
                    </form>
                </td>                
                <td>
                    <a href="eliminarUsuario/{$usuario->id_usuario}">Eliminar</a>
                </td>
            </tr>
        {/foreach}
    </table>
                            
{/if}

{include file='footer.tpl'}

