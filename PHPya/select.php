<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Select a MySQL </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Seleccionar registros de un tabla de MySQL</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Para recuperar datos desde MySQL debemos emplear la sentencia SELECT. De nueva cuenta usaremos la función <code>mysqli_connect()</code> y también la función <code>mysqli_query()</code>, sólo que esta vez esta última devolverá algo más que un simple booleano; si llega a existir un error, nuevamente regresará FALSE, pero si todo funciona en forma adecuada, regresará una referencia al resultado de la consulta, misma que debe ser guardada en una variable para poder usarse.
    	    </p>
            <p>
                Para poder utilizar el resultad de la sentencia utilizaremos una nueva función:
                <div class="code">
                    <em>$reg</em> = mysqli_fetch_array(<em>$regs</em>);
                </div>
                Donde <em>$regs</em> es la variable donde se guardó la referencia a la consulta (la resultante de mysqli_query()) y <em>$reg</em> es la variable donde se guarda cada un registro a la vez (en forma de arreglo de cadenas y con la ayuda de un ciclo while). Cuando se han leído todos los registros resultantes de la consulta, devuelve NULL 
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./plantillaExe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="plantillaExe.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>