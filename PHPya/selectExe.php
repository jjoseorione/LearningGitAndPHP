<!DOCTYPE html>
<html>
  <head>
    <title>Usuarios</title>
    <meta charset="UTF-8">
    <style>
      body{
        font-family: sans-serif;
      }
      .tabla1, .tabla1 th, .tabla1 td
      {
        font-family: sans-serif;
        border-collapse: collapse;
        display: scroll;
      }
      .tabla1
      {
        border: 1px solid rgb(52, 116, 235);
        overflow: auto;
        margin: 1em 0;
      }
      .tabla1 tr:nth-child(odd)
      {
        background-color: rgb(185, 207, 248);
      }
      .tabla1 tr:nth-child(even)
      {
        background-color: rgb(232, 239, 253);
      }
      .tabla1 th
      {
        color: white;
        background-color: rgb(52, 116, 235);
        padding: 0.3em 2em;
        border: 0px;
      }
      .tabla1 td
      {
        padding: 0.1em 0.5em;
        border-bottom: 1px solid rgb(52, 116, 235);
        border-top: 1px solid rgb(52, 116, 235);
      }
      .abotonB, .abotonB:link, .abotonB:visited
      {
        margin: none;
        border: none;
        background-color: #09F;
        color: #E7E7E7;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        font-weight: normal;
      }
      .abotonB:hover, .abotonB:active
      {
        background-color: #2BF;
      }
    </style>
  </head>

  <body>
    <h1>Alumnos registrados</h1>
    <table class="tabla1">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>E-mail</th>
        <th>Contraseña</th>
      </tr>

      <?php
        $conexion = mysqli_connect("localhost", "usuario_curso_php", "cursophp", "curso_php") or die("Error en la conexión a la base de datos");
        mysqli_set_charset($conexion, "utf8");
        $consulta = mysqli_query($conexion, "SELECT * FROM alumnos") or die("Error en la consulta");
        while($fila = mysqli_fetch_array($consulta))
        {
          echo "<tr>
                  <td>$fila[id]</td>
                  <td>$fila[nombre]</td>
                  <td>$fila[mail]</td>
                  <td>$fila[contrasena]</td>
                </tr>";
        }
        mysqli_close($conexion);
      ?>
    </table>
    <a href="./select.php" class="abotonB">Volver</a>
  </body>
</html>