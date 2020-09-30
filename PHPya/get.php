<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Método GET</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Método GET y paso de parámetros por vínculo</h1>

    	    <h2>Subtítulo</h2>
    	    <p>
    		    Hasta este momento se ha utilizado únicamente el método POST y se ha prescindido del método GET. La diferencia entre uno y otro es que el método POST envía toda la información de forma oculta para el usuario, mientras que el método GET deja un rastro en el vínculo de la página destino (la que recibe y utiliza las variables).
    	    </p>
            <p>
                Este rastro se ve en la siguiente forma:
                <div class="code">
                    http://pagina.com/apartado/?<strong>var1</strong>=algo&<strong>var2</strong>=algo&<strong>var3</strong>=algo&<strong>var4</strong>=algo&...
                </div>
                Donde <strong>var1, var2, </strong>etc. es el nombre de las variables. Como puede observarse, las variables llevan ya un valor asignado por el signo <strong>=</strong>. Además, la lista de variables está precedida por un símbolo <strong>?</strong> y cada variable está separada de otra por un símbolo <strong>&</strong>.
            </p>
            <p>
                La principal ventaja del método GET es que, al ser las variables accesibles a través del link, pueden enviarse directamente por este medio, sin necesidad de crear un formulario. Esto siempre y cuando sean valores estáticos que no deben ser pedidos al usuario o que ya se le pidieron con anterioridad.
            </p>
            <p>
                Es importante recalcar que el método GET no debe usarse para el envío de información importante, como datos de usuario o contraseñas, pues se perdería todo sentido de seguridad.
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                Se creará una página que mostrará 3 variables enviadas por método GET a través del link. Las variables serán nombre, correo y fecha de nacimiento. La página destino mostrará las variables. El código de la página es el siguiente:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./getExe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="getExe.php?nombre=Fernando+Ramírez&correo=federico%40gmail.com&fechaNac=1999-12-31" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>