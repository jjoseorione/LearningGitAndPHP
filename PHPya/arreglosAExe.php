<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <style>
      .tabla1, .tabla1 th, .tabla1 td
      {
        font-family: sans-serif;
        border-collapse: collapse;
        display: scroll;
      }
      .tabla1
      {
        border: 1px solid rgb(52, 116, 235);
        overflow: auto;
      }
      .tabla1 tr:nth-child(odd)
      {
        background-color: rgb(185, 207, 248);
      }
      .tabla1 tr:nth-child(even)
      {
        background-color: rgb(232, 239, 253);
      }
      .tabla1 caption
      {
        color: white;
        font-weight: bold;
        background-color: rgb(52, 116, 235);
        padding: 0.3em 2em;
        border: 0px;
      }
      .tabla1 td, .tabla1 th
      {
        padding: 0.1em 0.5em;
        border-bottom: 1px solid rgb(52, 116, 235);
        border-top: 1px solid rgb(52, 116, 235);
        text-align: left;
      }
      .tabla1 th
      {
        padding: 0.3em 2em;
      }
    </style>
  </head>

  <body>
    <?php
      $datos = array(
        'Apellido Paterno' => "Rodriguez",
        'Apellido Materno' => "Márquez",
        'Nombre(s)' => "Norberto",
        'Folio' => 91827364,
        'Afiliado al Seguro Social' => TRUE
      );

      echo "<table class=\"tabla1\">
            <caption>Datos de usuario:</caption>";

      foreach ($datos as $campo => $valor)
      {
        echo "<tr>
              <th>$campo:</th>
              <td>$valor</td>
              </tr>";
      }
      echo "</table>";
    ?>
    <p>
      <a href="./arreglosA.php">Volver</a>
    </p>
  </body>
</html>