<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Formularios</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Recolección de datos a través desde formularios</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Una actividad fundamental en PHP es la recuperación de datos de un formulario HTML. Recordemos que los formularios son entidades HTML, pero la recolección de los datos que envían dependen siempre de un lenguaje de programación; en este caso, PHP.
    	    </p>
            <p>
                Como sabemos, existen distintas entidades HTML para usar dentro de un formulario, como pueden ser &lt;input>, &lt;textarea>, &lt;select>, etc. La forma de recuperar los valores que se envían a través de un formulario es con la ayuda de los arreglos asociativos <em>$_POST[ ], $_GET[ ] y $_REQUEST[ ]</em>. El primero de estos arreglos contiene todos los valores que hayan sido enviados a través de método post, el segundo contiene los valores que hayan sido enviados a través de método get, y el último contiene todos los valores que hayan sido enviados con ambos métodos y también los del arreglo $_COOKIE[ ], el cuál se verá más adelante.
            </p>
            <p>
                Los arrays asociativos usan nombres en lugar de índices, así que una vez enviada la variable a través del formulario, se obtiene su valor a través de su nombre. Por ejemplo, si en un formulario se crea una entrada con el nombre <em>var</em> por método post, ésta podrá recuperarse en <em>$_POST['var']</em>. Cuando se hace referencia a un arreglo asociativo dentro de una cadena con comillas dobles, se debe prescindir de las comillas simples del nombre del índice.
            </p>
            <p>
                Para evaluar si los checkbox han sido marcados se utiliza la función <code>isset(<em>var</em>)</code>, la cual sirve para evaluar si una variable tiene un valor asignado o si contiene NULL.
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                Se crerá un formulario con entradas de distinto tipo y se recuperarán las variables en la página destino. El código de la página con el formulario es el siguiente:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./formulariosExe1.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>
                Éste es el código de la página destino:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./formulariosExe2.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="formulariosExe1.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>