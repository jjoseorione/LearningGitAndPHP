<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <?php
      $ar = fopen("../files/$_POST[nomb].txt", "a") or die("<h1>Error</h1>");
      fputs($ar, date('r'));
      fputs($ar, "\n \n");
      fputs($ar, $_POST['texto']);
      fputs($ar, "\n\n----------------------------------------------------\n\n");
      echo "Los datos se escribieron exitosamente<br><br>
            <a href=\"./archivos.php\">Volver</a>"
    ?>
  </body>
</html>