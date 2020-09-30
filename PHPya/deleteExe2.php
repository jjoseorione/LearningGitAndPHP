<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <style>
      body{
        font-family: sans-serif;
        padding:2em;
      }
      .listonOk{
        background-color: #009933;
        color: white;
        font-size: 1.2em;
        text-indent: 1em;
        padding: 1em 2em;
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
      .datos{
        font-size: 1.2em;
        padding: 0 1em 0 1em;
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
    <?php
      $conexion = mysqli_connect("localhost", "usuario_curso_php", "cursophp", "curso_php") or
        die("Error en la conexión a la base de datos");
      mysqli_set_charset("utf8mb4");
      $nombre = mysqli_fetch_array(mysqli_query($conexion, "SELECT nombre FROM alumnos WHERE id=$_POST[borrarReg]"));
      mysqli_query($conexion, "DELETE FROM alumnos WHERE id=$_POST[borrarReg]") or 
        die("Error al borrar el registro");
    ?>
    <div class="listonOk">
      Alumno eliminado exitosamente ✔
    </div>
    <div class="datos">
      <h2>Datos del alumno</h2>
      <p>Nombre: <?php echo $nombre['nombre']; ?> </p>
      <p>ID: <?php echo $_POST["borrarReg"]; ?> </p>
    </div>
    <a href="./delete.php" class="abotonB">Volver</a>
  </body>
</html>