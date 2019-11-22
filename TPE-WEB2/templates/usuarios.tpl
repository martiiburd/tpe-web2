{include file='header.tpl'}
{if isset($username)} 
    
    <ul>
        {foreach $usuarios as $usuario}
                <li> {$usuario->nombre} {$usuario->usuario_admin} </li>
                <a href="eliminarUsuario/{$usuario->id_usuario}">Eliminar</a>
                
                <form action="agregarComoAdmin/{$usuario->id_usuario}">
                    
                    <select name="">
                        <option value="0">Usuario</option>
                        <option value="1">Administrador</option>
                        
                    </select>
                    
                    <button type="submit" href="agregarComoAdmin/{$usuario->id_usuario}">Administrador</button>
                </form>
        {/foreach}
    </ul>
                            
{/if}

{include file='footer.tpl'}

