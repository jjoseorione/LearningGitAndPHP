<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Variables</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Declaración y Tipos de Variables</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    En PHP los nombres de las varibles comienzan siempre con el caracter <em>$</em> y son sensibles a mayúsculas y minúsculas (no así las palabras reservadas del lenguaje).
    	    </p>
            <p>
                PHP no es un lenguaje fuertemente tipado, así que no es necesario definir el tipo de dato que almacena antes de utilizarl; las mismas se crean en el momento de emplearlas. Las variables se declaran en cuanto se les asigna un valor. Por ejemplo:
                <div class="code">
                    $dia = 24; //Se declara un variable entera y guarda 24<br>
                    $sueldo = 758.43; //Se declara una variable tipo double y guarda 758.43;<br>
                    $nombre = "juan"; //Se declara una variable de tipo string y guarda 'juan'<br>
                    $exite = true; //Se declara una variable de tipo booleano y guarda true<br>
                </div>
                También podemos hacer notar que para disponer comentarios de línea debemos usar una doble diagonal (//).
            </p>
            <p>
                Las variables de tipo string pueden definirse con comillas simples o con comillas dobles. Es importante aclarar que la diferecia principal radica en que las cadenas con comillas dobles que contengan una variable dentro, mostrarán el valor de la variable, mientras que con conmillas simples, mostrarán el nombre de la variable (junto con el signo de pesos). Por ejemplo:
                <div class="code">
                    echo "Hoy es $dia"; //Mostrará "Hoy es 24"<br>
                    echo 'Mi sueldo es $sueldo'; //Mostrará "Mi sueldo es $sueldo"
                </div>
                Además, las cadenas en PHP se concatenan con el caracter punto (.).
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                El siguiente ejemplo inicializa 4 variables y las muestra al usuario.
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./variablesExe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="variablesExe.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>