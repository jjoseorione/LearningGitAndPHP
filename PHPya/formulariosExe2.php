<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <p>
      Los datos introducidos son los siguientes, por favor confirme
      para continuar:
    </p>
    <p>
      <?php
        if($_POST['pais']=='ca')
          $pais = 'Canadá';
        elseif($_POST['pais']=='us')
          $pais = 'Estados Unidos';
        elseif($_POST['pais']=='mx')
          $pais = 'México';

        if($_POST['eCivil']=='c')
          $eCivil = 'Casado';
        else
          $eCivil = 'Soltero';

        echo "Nombre Completo: $_POST[nomb] $_POST[apPat] $_POST[apMat]<br>
              Correo Electrónico: $_POST[correo]<br>
              Contraseña: $_POST[contrasena]<br>
              Fecha de Nacimiento: $_POST[fechaNac]<br>
              País: $pais<br>
              Estado Civil: $eCivil<br>";
        if(isset($_POST['terminos']))
          echo "Términos y Condiciones: Aceptados<br>";
        if(isset($_POST['newsletter']))
          echo "Newsletter: Suscrito";
        else
          echo "Newsletter: No suscrito";
      ?>
    </p>
    <p>
      <a href="./formularios.php">Volver</a>
    </p>
  </body>
</html>