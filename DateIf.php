<!DOCTYPE html>
<html>
   <head>
      <title>Repasando</title>
   </head>
   <body>
      <!--Programa para repasar función date y condicional if-->
      <?php
         //Este programa muestra el día del mes y dice si la página está en servicio, dependiendo del día

         echo "<h1>Este página sólo funciona en días impares</h1>
               <br><br>";
         $dia = date("d");
         if($dia%2 != 0)
            $mensaje = "Bienvenido";
         else
            $mensaje = "Sitio fuera de servicio";
         echo "Día = $dia
               <br><br><br>
               $mensaje";
      ?>
   </body>
</html>