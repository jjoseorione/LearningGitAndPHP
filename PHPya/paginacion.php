<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Paginación</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Mostrar información por páginas</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Cuando se tiene una consulta que devuelve una gran cantidad de registros, la mejor forma de mostrarlos es por páginas y no todos juntos. De esta forma podemos optimizar la rapidez con la que se carga la página.
    	    </p>
            <p>
                Para realizar una división por páginas debemos constantemente recordar cuántos registros ya se cargaron. Esto es fácil hacerlo si enviamos el parámetro de cuántos registros ya se han leído a la misma página por medio del enlace.
            </p>
            <p>
                También nos será de ayuda la palabra LIMIT en MySQL, la cual nos ayuda a limitar la cantidad de registros que queremos obtener. Para ello se agrega la palabra LIMIT, seguida del número de registro en el cual queremos saltarnos o ignorar y finalmente, separado por una coma, el número de registros que queremos observar. Podemos aprender más de ello en el manual de MySQL.
            </p>
            <p>
                Otra nueva función que nos será de utilidad será la función <code>define(<em>"string"</em>,<strong>valor</strong>)</code>. Esta función sirve para crear constantes, donde <em>"string"</em> es el nombre de la constante y <strong>valor</strong> es el valor que tomará, el cual puede ser de cualquier tipo.
            </p>
            <p>
                Por último es importante mencionar que será de utilidad definir la páginación como una función que después pueda simplemente ser llamada cuando sea requerida. Podemos incluso crearla en un archivo externo, el cual podemos llamar con la sentencia <code>include '<em>ruta_archivo</em>'</code>. Donde <em>ruta_archivo</em> es la ruta relativa o absoluta al archivo con funciones.
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                Se recreará la página que muestra a todos los alumnos, pero esta vez se mostrará con una páginación.
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./paginacionExe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="paginacionExe.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>