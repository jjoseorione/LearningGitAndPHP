<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <title>Curso PHP - Arreglos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css" >
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>
    <!-------------------------------------------------------------->
    <body>
        <div class="divfondo">
    	    <h1>Arreglos</h1>

    	    <h2>Descripción</h2>
    	    <p>
    		    Un arreglo es un colección de valores. Los arreglos pueden ser unidimensionales, bidimencionales o multidimencionales (más de dos dimensiones); son utilizados ámpliamente en el lenguaje PHP.
    	    </p>
            <p>
                Se pueden definir los valores para cada índice al vuelo, sin tener que declararlo:
                <div class="code">
                    $dias[0] = 31;<br>
                    $dias[1] = 28;
                </div>
                Luego de estas dos líneas, tenemos creado un vector de dos elementos, a los cuáles accedemos por el subíndice:
                <div class="code">
                    echo $dias[0]; //imprime '31'<br>
                    echo $dias[1]; //imprime '28'
                </div>
                El vector puede crecer de forma dinámica agregando un siguiente índice. De esta forma, si hacemos <code>$dias[2] = 31</code>, el arreglo pasará a tener 3 elementos.
            </p>
            <p>
                También es posible obviar el subíndice cuando asignamos valores:
                <div class="code">
                    $dias[] = 31;<br>
                    $dias[] = 28;<br>
                    $dias[] = 31;
                </div>
                El código anterior también asigna de manera automática la numeración de 0 a 2.
            </p>
            <p>
                De igual forma, existe la posibilidad de inicializar varios índices en una sola línea con la función array:
                <div class="code">
                    $dias = array(31, 28, 31);
                </div>
            </p>
            <p>
                Para recorrer de forma completa un arreglo en PHP podemos usar el ciclo foreach:
                <div class="code">
                    foreach($dias as $dia)<br>
                    {<br>
                    &nbsp; echo $dia . "&lt;br>";<br>
                    }
                </div>
            </p>
            <p>
                Si necesitamos obtener el tamaño del vector en cualquier momento, podemos usar la función <code>count(<em>$array</em>)</code>. También se puede usar la función <code>sizeof(<em>$array</em>)</code>.
            </p>

    	    <h2>Ejemplo</h2>
    	    <p>
                El siguiente programa crea un arreglo con los nombres de los días de la semana y uno con los nombres de los meses. Posteriormente imprime la fecha actual con la ayuda de la función <code>date()</code>. Click <a href="https://www.php.net/manual/es/function.date" target="_blank">aquí</a> para ver la documentación de dicha función.
                <div class="divcodigo">
                    <?php
                        $archivo = htmlentities(file_get_contents('./arreglosExe.php'));
                        echo "<pre>";
                        echo $archivo;
                        echo "</pre>";
                    ?>
                </div>

                <a href="arreglosExe.php" class="abotonR">Ejecutar ejemplo</a>
            </p>
        <a href="./" class="abotonB">Volver al índice</a>
        </div>
    </body>
</html>