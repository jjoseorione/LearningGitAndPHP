<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <?php
      $dias = array('domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado');
      $meses[1] = 'enero';
      $meses[2] = 'febrero';
      $meses[3] = 'marzo';
      $meses[4] = 'abril';
      $meses[5] = 'mayo';
      $meses[6] = 'junio';
      $meses[7] = 'julio';
      $meses[8] = 'agosto';
      $meses[9] = 'septiembre';
      $meses[10] = 'octubre';
      $meses[11] = 'noviembre';
      $meses[12] = 'diciembre';

      $fecha = $dias[date('w')] . " " . date('j') . " de " . $meses[date('n')] . " de " . date('Y');
      echo "Hoy es $fecha<br>";
      echo date('r');
    ?>
  </body>
</html>