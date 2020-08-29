<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <p>
      Estos son los comentarios que usted ha enviado:
    </p>
    <p>
      ----------------------------------------------------
    </p>
    <?php
      $ar = fopen("../files/$_POST[nomb].txt", "r") or 
            die("<h1>Error</h1>");
      while(!feof($ar))
        echo nl2br(fgets($ar));
      fclose($ar);
    ?>
  </body>
</html>