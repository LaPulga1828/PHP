<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <?php
        //if
        /*El constructor if es una de las características más importantes de muchos lenguajes, incluido PHP. Permite la ejecución condicional de fragmentos de código. PHP dispone de una estructura if que es similar a la de C:

        if (expr)
            sentencia

        Como se describe en la sección sobre expresiones , la expresión es evaluada a su valor booleano. Si la expresión se evalúa como true, PHP ejecutará la sentencia y si se evalúa como false la ignorará. Más información sobre qué valores evalúan como false se puede encontrar en la sección 'Convirtiendo a booleano'. */

        $a=7;
        $b=3;

        if ($a > $b) {
            echo "a es mayor que b";
          }

        //elseif
        /* elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como false. Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión condicional del elseif se evalúa como true.*/

        $a=7;
        $b=3;

        if ($a > $b) {
            echo "a es mayor que b";
        } elseif ($a == $b) {
            echo "a es igual que b";
        } else {
            echo "a es menor que b";
        }

        //while
        /* Los bucles while son el tipo más sencillo de bucle en PHP. Se comportan igual que su contrapartida en C. La forma básica de una sentencia while es:

        while (expr)
            sentencia
        El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas, tanto como la expresión while se evalúe como true. El valor de la expresión es verificado cada vez al inicio del bucle, por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, la ejecución no se detendrá hasta el final de la iteración (cada vez que PHP ejecuta las sentencias contenidas en el bucle es una iteración). A veces, si la expresión while se evalúa como false desde el principio, las sentencias anidadas no se ejecutarán ni siquiera una vez.

        Al igual que con la sentencia if, se pueden agrupar varias instrucciones dentro del mismo bucle while rodeando un grupo de sentencias con corchetes, o utilizando la sintaxis alternativa:

        while (expr):
            sentencias
            ...
        endwhile;

        /* ejemplo 1 */

        $i = 1;
        while ($i <= 10) {
            echo $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
        }

        /* ejemplo 2 */

        $i = 1;
        while ($i <= 10):
            echo $i;
            $i++;
        endwhile;

        //do-while
        /*Los bucles do-while son muy similares a los bucles while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar que al principio. La diferencia principal con los bucles while es que está garantizado que corra la primera iteración de un bucle do-while (la expresión verdadera sólo es verificada al final de la iteración), mientras que no necesariamente va a correr con un bucle while regular (la expresión verdadera es verificada al principio de cada iteración, si se evalúa como false justo desde el comienzo, la ejecución del bucle terminaría inmediatamente).*/

        $i = 0;
        do {
            echo $i;
        } while ($i > 0);

        //for
        /*Los bucles for son los más complejos en PHP. Se comportan como sus homólogos en C. La sintaxis de un bucle for es:

        for (expr1; expr2; expr3)
            sentencia
        La primera expresión (expr1) es evaluada (ejecutada) una vez incondicionalmente al comienzo del bucle.

        En el comienzo de cada iteración, se evalúa expr2. Si se evalúa como true, el bucle continúa y se ejecutan la/sy sentencia/s anidada/s. Si se evalúa como false, finaliza la ejecución del bucle.

        Al final de cada iteración, se evalúa (ejecuta) expr3.

        Cada una de las expresiones puede estar vacía o contener múltiples expresiones separadas por comas. En expr2, todas las expresiones separadas por una coma son evaluadas, pero el resultado se toma de la última parte. Que expr2 esté vacía significa que el bucle debería ser corrido indefinidamente (PHP implícitamente lo considera como true, como en C). Esto puede no ser tan inútil como se pudiera pensar, ya que muchas veces se debe terminar el bucle usando una sentencia condicional break en lugar de utilizar la expresión verdadera del for.*/ 

        /* ejemplo 1 */

        for ($i = 1; $i <= 10; $i++) {
            echo $i;
        }

        /* ejemplo 2 */

        for ($i = 1; ; $i++) {
            if ($i > 10) {
                break;
            }
            echo $i;
        }

        /* ejemplo 3 */

        $i = 1;
        for (; ; ) {
            if ($i > 10) {
                break;
            }
            echo $i;
            $i++;
        }

        
            //require
        /*require es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.*/

        require('somefile.php');


            //include
        /*La sentencia include incluye y evalúa el archivo especificado.

        La siguiente documentación también se aplica a require.

        Los archivos son incluidos con base en la ruta de acceso dada o, si ninguna es dada, el include_path especificado. Si el archivo no se encuentra en el include_path, include finalmente verificará en el propio directorio del script que hace el llamado y en el directorio de trabajo actual, antes de fallar. El constructor include emitirá una advertencia si no puede encontrar un archivo, éste es un comportamiento diferente al de require, el cual emitirá un error fatal..

        Si una ruta es definida — ya sea absoluta (comenzando con una letra de unidad o \ en Windows o / en sistemas Unix/Linux) o relativa al directorio actual (comenzando con . o ..) — el include_path será ignorado por completo. Por ejemplo, si un nombre de archivo comienza con ../, el interprete buscará en el directorio padre para encontrar el archivo solicitado.

        Para más información sobre como PHP maneja la inclusión de archivos y la ruta de accesos para incluir, ver la documentación de include_path.

        Cuando se incluye un archivo, el código que contiene hereda el ámbito de las variables de la línea en la cual ocurre la inclusión. Cualquier variable disponible en esa línea del archivo que hace el llamado, estará disponible en el archivo llamado, desde ese punto en adelante. Sin embargo, todas las funciones y clases definidas en el archivo incluido tienen el ámbito global.*/ 

        //archivo con las variables
        //vars.php
            

        $color = 'verde';
        $fruta = 'manzana';

            
        //archivo con la ejecucion
        //test.php
            

        echo "Una $fruta $color"; // Una

        include 'vars.php';

        echo "Una $fruta $color"; // Una manzana verde        

        //swith
        /*La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.*/ 

        if ($i == 0) {
            echo "i es igual a 0";
        } elseif ($i == 1) {
            echo "i es igual a 1";
        } elseif ($i == 2) {
            echo "i es igual a 2";
        }
        
        switch ($i) {
            case 0:
                echo "i es igual a 0";
                break;
            case 1:
                echo "i es igual a 1";
                break;
            case 2:
                echo "i es igual a 2";
                break;
        }

    ?>

</body>
</html>