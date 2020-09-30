<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Delete a MySQL</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Eliminar registros de una tabla de MySQL</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Para eliminar registros de una tabla de MySQL usaremos de nueva cuenta un formulario. En la primer página tendremos que poder ver los registros de la tabla deseada, para así poder seleccionar el registro que queremos eliminar.
    	    </p>
            <p>
                En la página de acción usaremos de nuevo la función <code>mysqli_query()</code>, sólo que esta vez será para introducir una sentencia DELETE.
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                La siguiente página muestra de nuevo la tabla de alumnos, sólo que esta vez estará dentro de un formulario y se agregará un radio para poder seleccionar un registro para ser eliminado. Posteriormente, la página destino eliminará el registro.
            </p>
            <p>
                Código del formulario:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./deleteExe1.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>
                Código de la página que realiza el borrado:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./deleteExe2.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>


                <a href="deleteExe1.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>