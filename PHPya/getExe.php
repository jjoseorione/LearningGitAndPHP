<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <style>
      body{
        font-family: sans-serif;
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
    <h1>Datos enviados por método get (ver enlace):</h1>
    <?php
      echo "<p>Nombre: $_GET[nombre]</p>";
      echo "<p>Correo: $_GET[correo]</p>";
      echo "<p>Fecha de nacimiento: $_GET[fechaNac]</p>";
    ?>
    <a href="./get.php" class="abotonB">Volver</a>
  </body>
</html>