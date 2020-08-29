<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <p>
      A continuación se muestran las entidades HTML de la 170 a la 200.
    </p>
    <?php
      for($i=170; $i<=200; $i++)
        echo "La entidad &amp#$i es &#$i <br>";
    ?>
  </body>
</html>