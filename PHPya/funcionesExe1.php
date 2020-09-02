<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <style>
      form
      {
        font-size: 2em;
        border: 1px solid black;
      }
      form .ecuacion
      {
        font-size: 1em;
        width: 2em;
        text-align: right;
      }
    </style>
  </head>

  <body>
    <h1>Escriba su función cuadrática despejada</h1>
    <form action="./funcionesExe2.php" method="post">
        <input type="number" name="a" class="ecuacion">x<sup>2</sup>+
        <input type="number" name="b" class="ecuacion">x+
        <input type="number" name="c" class="ecuacion"> = 0
        <br>
        <input type="submit" name="Enviar">
    </form>
  </body>
</html>