<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <style>
      strong
      {
        background-color: lime;
        font-size: 1.5em;
      }
    </style>
  </head>

  <body>
    <p>
      Este programa genera números aleatorios entre 1 y 50 y se detiene en cuando encuentra
      un número 25.
    </p>
    <?php
      do
      {
        $random = rand(1,50);
        echo "El número aleatorio es ";
        if($random==25)
          echo "<strong>";
        echo "$random <br>";
        if($random==25)
          echo "</strong>";
      }
      while($random != 25)

    ?>
  </body>
</html>