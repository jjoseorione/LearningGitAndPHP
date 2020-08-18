<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <?php
      $valor = rand(1, 10);
      echo "<p>El valor sorteado es $valor</p>";
      if($valor <= 5)
        echo "<p>$valor es menor o igual a 5</p>";
      else
        echo "<p>$valor es mayor a 5</p>";
    ?>
  </body>
</html>