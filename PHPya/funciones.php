<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Funciones</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Funciones</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    La forma de crear y sar variables en PHP es bastante común y similar a la de otros lenguajes. Se utiliza la palabra reservada <em>function</em> seguida del nombre de la función y los parámetros entre paréntesis:
                <div class="code">
                    function nombreFunción($parámetro1, $parámetro2)<br>
                    {<br>
                    &nbsp; instrucciones;<br>
                    return $valorDevuelto;<br>
                    }
                </div> 
    	    </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                Crearemos un programa que use una función reciba una ecuación de segundo grado y devuelva los valores de x. Se usará un formulario para poder recibir del usuario la ecuación. El código para el formulario es el siguiente:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./funcionesExe1.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                Y el código de la página que realiza el trabajo es a siguiente:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./funcionesExe2.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="funcionesExe1.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>