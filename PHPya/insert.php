<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Insert a MySQL</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Insertar registros a una tabla de MySQL</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Para usar MySQL con PHP es necesario el uso de formularios, ya que ésta es la única forma en la que podemos introducir información a PHP para posteriormente ser procesada. Por lo tanto, las páginas en las que introducimos datos casi siempre serán meros formularios, mientras que las páginas destino serán las que realicen la conexión a las bases de datos.
    	    </p>
            <p>
                Para realizar conexiones y operaciones entre PHP y MySQL, PHP cuenta con algunas funciones ya definidas. Las principales dos son las siguientes:
                
                <ul>
                    <li>
                        <code>
                            <em>$var</em> = mysqli_connect(<em>'host'</em>, <em>'usuario'</em>, <em>'contraseña'</em>, <em>'base'</em>);
                        </code>
                        <div>
                            Donde <em>host</em> es el host en el que se encuentra la base, <em>usuario</em> es el usuario de MySQL que iniciará sesión, <em>contraseña</em> es la contraseña del usuario y <em>base</em> es la base a la que nos conectaremos. Esta función sirve para concectarnos a la base que utilizaremos. El parámetro devuelto es el apuntador a la conexión. En caso de no realizar la conexión exitosamente, devuelve FALSE.
                        </div>
                    </li>

                    <li>
                        <code>
                            mysqli_set_charset(<em>$var, 'string'</em>);
                        </code>
                        <div>
                            Esta función sirve para estableser el set de caracteres que será usado a lo largo de toda la conexión. La varible <em>$var</em> es la que contiene la referencia a la conexión y <em>'string'</em> es el charset que deseamos utilizar.
                        </div>
                    </li>

                    <li>
                        <code>
                            mysqli_query(<em>$var</em>, <em>'query'</em>);
                        </code>
                        <div>
                            Donde <em>$var</em> es la variable que contiene la conexión a la base de datos y <em>'query'</em> es la cadena que contiene el query a introducir al gestor de base de datos.
                        </div>
                    </li>

                    <li>
                        <code>
                            mysqli_close(<em>$var</em>);
                        </code>
                        <div>
                            Esta función cierra la conexión a MySQL previamente abierta. La variable <em>$var</em> es la variable que contiene la referencia a la conexión.
                        </div>
                    </li>
                </ul>
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                A continuación se muestra una página que da de Alta a los alumnos para una plataforma de cursos en línea. La primera página realiza únicamente la captura de datos a través de un formulario, mientras que la segunda es la que realiza la escritura en base de datos.
            </p>
            <p>
                Código del formulario:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./insertExe1.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>
                Cófigo de la página destino:
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./insertExe2.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="insertExe1.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>