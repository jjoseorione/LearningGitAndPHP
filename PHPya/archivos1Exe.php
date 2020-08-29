<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>

  <body>
    <p>
      Escriba el texto que desea agregar al archivo:
    </p>
    <form action="archivos2Exe.php" method="post">
      Escriba su nombre completo:<br>
      <input type="text" name="nomb" placeholder="Ej. Fernando Rodriguez">
      <br><br>

      Escriba sus comentarios:<br>
      <textarea name="texto" rows="5" cols="60" placeholder="Hola. Quisiera comentarles que..."></textarea>
      <br><br>

      <input type="submit">
    </form>
  </body>
</html>