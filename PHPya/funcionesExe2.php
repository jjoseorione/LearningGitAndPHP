<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <?php
      function ecSegGrado($a, $b, $c)
      {
        $discr = ($b*$b)-(4*$a*$c);
        if($discr >= 0)
        {
          $x[1] = ((-1*$b) + sqrt($discr)) /(2*$a);
          $x[2] = ((-1*$b) - sqrt($discr)) /(2*$a);
        }
        else
        {
          $real = (-1*$b)/(2*$a);
          $imag = (sqrt(abs($discr)))/(2*$a);
          $x[1] = $real."+".$imag."i";
          $x[2] = $real."-".$imag."i";
        }

        return $x;
      }

      $x = ecSegGrado($_POST['a'], $_POST['b'], $_POST['c']);
      echo "<h2>
            x<sub>1</sub> = $x[1] <br>
            x<sub>2</sub> = $x[2] <br>
            </h2>";
    ?>
    <a href="./funciones.php">Volver</a>
  </body>
</html>