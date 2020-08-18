<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Condicional if</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Condicional if</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    La sintaxis de la condicional if es muy similar a la que usan la mayoría de los lenguajes. La condicional if en PHP tiene la posibilidad de usar elseif. Por ejemplo:
                <div class="code">
                    if(<em>condiones</em>)<br>
                    {<br>
                    &nbsp; <em>instrucciones;</em><br>
                    }<br>
                    elseif(<em>condiciones</em>)<br>
                    {<br>
                    &nbsp; <em>instrucciones;</em><br>
                    }<br>
                    else<br>
                    {<br>
                    &nbsp; <em>instrucciones;</em><br>
                    }
                </div>
    	    </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                Se usará un if para saber si un número aleatorio entre 1 y 10 es menor o igual a 5. La función rand(n, N) genera números aleatorios.
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./ifExe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="ifExe.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>