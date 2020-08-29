<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Archivos de texto</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Creación de archivos de texto</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Una actividad fundamental es poder registrar información persistente en el servidor. Para registrar de forma adecuada información en el servidor disponemos de dos herramientas que se complementan en muchos casos: archivos de texto y bases de datos. 
    	    </p>
            <p>
                Para utilizar archivos usaremos la función <code>fopen(<em>nombre</em>, <em>option</em>)</code>. En su forma más sencilla, esta función admite dos parámetros: el nombre y ruta del archivo y el modo de apertura. Utilizaremos la opción <em>'a'</em> la cual abre el archivo en modo escritura (o lo crea en caso de que no exista) y posiciona el puntero al final para añadir nuevos datos. Para ver más usos de esta función, se puede ver la documentación <a href="https://www.php.net/manual/es/function.fopen.php" target="_blank">aquí</a>.
            </p>
            <p>
                En caso de que el archivo no pueda ser creado, la función devolverá FALSE. Por ello, se usará el operador <em>or</em> para realizar otra acción en caso de error. Esta otra acción será la función <code>die("mensaje")</code>, la cual detiene la ejecución del programa y muestra un mensaje de error personalizado.
            </p>
            <p>
                Para la grabación de datos usaremos la función <code>fputs(<em>file</em>, <em>string</em>)</code>, la cual escribe la cadena <em>string</em> en el archivo <em>file</em>.
            </p>
            <p>
                Finalmente, para cerrar el archivo se usará la función <code>fclose(<em>file</em>)</code>.
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                El siguiente ejemplo pide al usuario su nombre y sus comentarios a través de un formulario. Posteriormente guarda los comentarios del usuario en un archivo que lleva el mismo nombre que el del usuario. El código de la página con el formulario es el siguiente:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./archivos1Exe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                El código de la página que recibe y escribe los datos es el siguiente:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./archivos2Exe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="archivos1Exe.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>