<!DOCTYPE html>
<html>
  <head>
    <title>Alta de Alumnos</title>
    <meta charset="UTF-8">
    <style>
      body{
        font-family: sans-serif;
      }
      .divForm
      {
        text-align: center;
      }
      form{
        display: inline-block;
        border-radius: 18px;
      }
      .divinput{
        border: 2px solid #AAA;
        display: block;
        margin: 1em;
        border-radius: 15px;
        font-size: 1.2em;
        padding: none;
      }
      .divinput:focus-within{
        border: 2px solid dodgerblue;
      }
      form .input{
        border: none;
        outline: none;
        font-size: 1.2em;
        margin: 0.5em;
        padding: none;
      }
      .abotonB, .abotonB:link, .abotonB:visited
      {
        margin: none;
        border: none;
        background-color: #09F;
        color: #E7E7E7;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        font-weight: normal;
        width: 100%;
      }
      .abotonB:hover, .abotonB:active
      {
        background-color: #2BF;
      }
    </style>
  </head>

  <body>
    <div class="divForm">
      <h1>Alta de Alumnos</h1>
      <form action="./insertExe2.php" method="post" class="input">
        <div class="divinput">
          👤<input type="text" name="nombUsuario" placeholder="Nombre completo" class="input" required>
        </div>
        <div class="divinput">
          ✉️<input type="email" name="correoUsuario" placeholder="Correo electrónico" class="input" required>
        </div>
        <div class="divinput">
          🔒<input type="password" name="contrasena" placeholder="Contraseña" class="input" required>
        </div>
        <div class="divinput" style="border: none">
          <input type="submit" class="abotonB" value="Registrarse">
        </div>
      </form>
    </div>
    <?php

    ?>
  </body>
</html>