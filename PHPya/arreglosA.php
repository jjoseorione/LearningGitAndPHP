<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Vectores Asociativos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Vectores Asociativos</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Los vectores asociativos no es tan común en otros lenguajes, pero en PHP son de uso indispensable en distintas situaciones, por ejemplo, en la recuperación de información enviada a través de formularios.
    	    </p>
            <p>
                Un vector asociativo accede a sus valores a través de índices alfanuméricos en lugar de numéricos. Es decir, el índice es una cadena. Los valores pueden definirse uno a uno o con la función <code>array()</code> de la siguiente manera:
                <div class="code">
                    $arreglo = array(<br>
                    &nbsp; 'nombre1' => 204563,<br>
                    &nbsp; 'nombre2' => 'Hola Mundo'<br>
                    &nbsp; 'nombre3' => TRUE<br>
                    );
                </div>
                Para este tipo de vectores también puede usarse el ciclo <code>foreach</code>.
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                El siguiente programa guarda los datos de contacto de una persona en un arreglo asociativo y los imprime.
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./arreglosAExe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="arreglosAExe.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>