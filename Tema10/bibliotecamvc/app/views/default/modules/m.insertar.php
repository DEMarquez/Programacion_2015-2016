 <form action="index.php" method="post">
		 <table border="0" cellspacing="4" cellpadding="0" class="tabla">
  <tr>
    <td>Insertar: </td>
    <td><label>
      Nombre: <input type="text" name="nombre" autofocus required />
    </label></td>
    <td><label>
      Apellido1: <input type="text" name="apellido1" autofocus required />
    </label></td>
    <td><label>
      Apellido2: <input type="text" name="apellido2" autofocus required />
    </label></td>
    <td><label>
      DNI: <input type="text" name="dni" autofocus required />
    </label></td>
    <td><label>
      Facultad:
      <select name="facultad">
        <option value="Arquitectura">Arquitectura</option>
        <option value="Enfermeria">Enfermeria</option>
        <option value="Ingenieria Quimica">Ingenieria Quimica</option>
        <option value="Odontologia">Odontologia</option>
        <option value="Ingenieria de Sistemas">Ingenieria de Sistemas</option>
        <option value="Gas y Petroleo">Gas y Petroleo</option>
        <option value="Administraci&oacute;n de Empresas">Administraci&oacute;n de Empresas</option>
        <option value="Dise&ntilde;o de Interiores">Dise&ntilde;o de Interiores</option>
        <option value="Ingenieria Civil">Ingenieria Civil</option>
        <option value="Ingenieria de Perros">Ingenieria de Alimentos</option>		
      </select>
    </label></td>
    <td><label>
      <input type="submit" name="Submit" value="   Insertar   " />
    </label></td>
  </tr>
</table>
</form>