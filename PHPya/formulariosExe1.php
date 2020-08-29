<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <p>
      Registrarse:
    </p>
    <form action="formulariosExe2.php" method="post">
      Apellido Paterno:
      <input type="text" name="apPat" placeholder="Ej. Hernández" required>
      <br>
      Apellido Materno:
      <input type="text" name="apMat" placeholder="Ej. Martínez" required>
      <br>
      Nombre:
      <input type="text" name="nomb" placeholder="Ej. Rodrigo" required>
      <br><br>
      Correo electrónico:
      <input type="mail" name="correo" placeholder="Ej. fulano@empresa.com" required>
      <br>
      Contraseña:
      <input type="password" name="contrasena" placeholder="Ej. Rodrigo" required>
      <br><br>
      Fecha de Nacimiento:
      <input type="date" name="fechaNac" required>
      <br><br>
      País:
      <select name="pais" required>
        <option value="" disabled selected hidden>Seleccione su país</option>
        <option value="ca">Canadá</option>
        <option value="us">Estados Unidos</option>
        <option value="mx">México</option>
      </select>
      <br><br>
      Estado Civil:
      <br>
      <input type="radio" name="eCivil" value="c">Casado
      <input type="radio" name="eCivil" value="s">Soltero
      <br><br>
      <input type="checkbox" name="terminos" required>Acepto los términos y condiciones
      <input type="checkbox" name="newsletter">Acepto suscribirme al newlstter
      <br><br>
      <input type="submit">
    </form>
  </body>
</html>