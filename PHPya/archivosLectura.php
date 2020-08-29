<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Lectura de Archivos de texto</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Lectura de Archivos de Texto</h1>

    	    <h2>Descripción</h2>
    	    <p>
                De nueva cuenta es de utilidad la funcion <code>fopen()</code>, con la diferencia de que esta vez es necesario el tipo de apertura 'r' que es de sólo lectura y posicionando el puntero al inicio.
            </p>
            <p>
    		    Para la lectura de un achivo contamos con la función <code>fgets(<em>file</em>)</code>, la cual obtiene y devuelve una línea completa dentro de un archivo. Debemos leer líneas hasta que lleguemos al final del archivo; para ello, la función <code>feof(<var>file</var>)</code> nos devuelve TRUE cuando el puntero de un archivo ha llegado ya al final del mismo.
    	    </p>
            <p>
                Ahora bien, para lograr de manera correcta que se respeten los saltos de línea es necesario usar la función <code>nl2br(<em>string</em>)</code>, la cual convierte los saltos de línea de tipo archivo (\n) dentro de la cadena <em>string</em> a saltos de línea HTML (&lt;br>).
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                Se realizará la lectura del archivo que creó el usuario accediendo a través de su nombre. Para ello se hará uso de un formulario. El código de la página formulario es el siguiente:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./archivosLecturaExe1.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="archivosLecturaExe1.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>