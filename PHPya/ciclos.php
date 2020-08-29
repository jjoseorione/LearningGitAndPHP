<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Ciclos for, while y do/while</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Ciclos for, while y do/while</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Los ciclos for, while y do while tienen la misma sintaxis y funcionalidad que tienen en lenguajes como C, Java y Javascript. 
    	    </p>

    	    <h2>Ejemplos</h2>

            <h3>Ejemplo 1</h3>
    	    <p>
                El siguiente programa imprime las entidades HTML con número del 170 al 200 con un ciclo for.
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./ciclosExe1.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="ciclosExe1.php" class="abotonR">Ejecutar ejemplo 1</a>
            </p>

            <h3>Ejemplo 2</h3>
            <p>
                El siguiente programa imprime números aleatorios del 1 al 100 y deja de imprimirlos en cuanto aparece un número 50.
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./ciclosExe2.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="ciclosExe2.php" class="abotonR">Ejecutar ejemplo 2</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>