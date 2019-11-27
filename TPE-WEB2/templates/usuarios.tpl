{include file='header.tpl'}
<div class='usuario'>
    {if isset($username)}
        <h1>Usuarios-Administradores</h1>
        <table class="tablaUsuario col-md-10" >
            <tr class="tablaUsuario">
                <th class="tabla_usuario">Mail</th>
                <th class="tabla_usuario">Tipo de Usuario</th>
                <th class="tabla_usuario">Eliminar</th>        
            </tr>
            {foreach $usuarios as $usuario}
                <tr class="tablaUsuario">
                    <td class="tablaUsuario">
                        {$usuario->nombre} {$usuario->usuario_admin}
                    </td> 
                    <td class="tablaUsuario">
                        <form action="agregarComoAdmin/{$usuario->id_usuario}" method="POST">
                            <select name="elegirAdmin">
                                <option value="0" {if ($usuario->usuario_admin=="0")}selected{/if}>Usuario</option>
                                <option value="1" {if ($usuario->usuario_admin=="1")}selected{/if}>Administrador</option>
        
                        </select>
                        <button type="submit">Cambiar</button>
                        </form>
                    </td>                
                    <td class="tablaUsuario">
                        <a href="eliminarUsuario/{$usuario->id_usuario}">Eliminar</a>
                    </td>
                </tr>
            {/foreach}
        </table>                       
    {/if}
<div>
{include file='footer.tpl'}

