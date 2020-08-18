<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Introducción</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Inroducción</h1>
    	    <p>
    		    Para agregar un programa PHP dentro de una página HTML, debemos por un lado crear el archivo con la exensión .php (a diferencia de las páginas estáticas que tienen exensión .htm o .html) y dentro del contenido de la página, encerrar el programa entre los símbolos <code>&lt;?php</code> y <code>?></code>. Por ejemplo:
                <div class="code">
                    <em>Código_HTML</em><br>
                    &lt;?php<br>
                    &nbsp; <em>instrucciones_PHP;</em><br>
                    ?><br>
                    <em>Código_HTML</em>
                </div>
                El comando de PHP para imprimir dentro de la página es <code>echo</code>. 
    	    </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                Crearemos el programa <em>Hola Mundo</em> en PHP.
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./introExe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="./introExe.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>