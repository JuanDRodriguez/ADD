<div id="formulario">
            <form id="form" method="post" action="index.php">
            <h1>Registro Usuario</h1><br>
            <label>Usuario</label>
            <input type="text" name="Ruser" placeholder="Usuario">
   
            <label>Nombre</label>
            <input type="text" name="name"  placeholder="Nombre">
  
            <label>Correo</label>
             <input type="text" name="mail"   placeholder="Correo">

            <label>Contraseña</label>
            <input type="password"  name="password"  placeholder="Contraseña">
  
            <label>C. Contraseña</label>
            <input type="password" name=""   placeholder="Confirma tu contraseña">

            <label>Perfil</label>
             <select name="typeProfile" id="sltProfile">
                 <option value="" >Selecciona un perfil</option>
                 <option value="Administrador">Administrador</option>
                <option value="Lectura">Lectura</option>
                 <option value="Operacion">Operación</option>
                 </select>
                    </br>
                    </br>
                 <button type="submit" name="enviar">Registrar</button>
    </form>
</div>