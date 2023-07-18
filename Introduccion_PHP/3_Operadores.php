<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    

    //Operadores aritmeticos
    /*
    +$a, Identidad,Conversión de $a a int o float según el caso.
    -$a, Negación,Opuesto de $a.
    $a + $b, Adición, Suma de $a y $b.
    $a - $b, Sustracción, Diferencia de $a y $b.
    $a * $b, Multiplicación, Producto de $a y $b.
    $a / $b, División, Cociente de $a y $b.
    $a % $b, Módulo, Resto de $a dividido por $b.
    $a ** $b,Exponenciación,Resultado de elevar $a a la potencia $bésima. Introducido en PHP 5.6.

    */
        
    echo (5 % 3)."\n";           // muestra 2
    echo (5 % -3)."\n";          // muestra 2
    echo (-5 % -3)."\n";         // muestra -2
    echo (-5 % 3)."\n";          // muestra -2

        // Suma: +
        // Resta: -
        // Multiplicación: *
        // División: /
        // Módulo: %
        // Incremento: ++
        // Decremento: --
        // Exponenciación: **
        echo "<h1>Operadores Aritméticos</h1><br>";
        $x = 9;
        echo ("x = ".$x."<br>");
        $y = 3;
        echo ("y = ".$y."<br>");
        $z = 5;
        echo ("z = ".$z."<br>");
        $suma = $x + $y;
        echo ("suma = ".$suma."<br>");
        $resta = $x - $z;
        echo ("resta = ".$resta."<br>");
        $multiplicacion = $suma*$resta;
        echo ("multiplicacion = ".$multiplicacion."<br>");
        $final = $multiplicacion++;
        echo ("final = ".$final."<br>");
        echo ("multiplicacion = ".$multiplicacion."<br>");


    //Operadores de comparacion
    /* 
    $a == $b,Igual, true si $a es igual a $b después de la manipulación de tipos.
    $a === $b, Idéntico,true si $a es igual a $b, y son del mismo tipo.
    $a != $b, Diferente, true si $a no es igual a $b después de la manipulación de tipos.
    $a <> $b, Diferente, true si $a no es igual a $b después de la manipulación de tipos.
    $a !== $b, No idéntico, true si $a no es igual a $b, o si no son del mismo tipo.
    $a < $b, Menor que, true si $a es estrictamente menor que $b.
    $a > $b, Mayor que, true si $a es estrictamente mayor que $b.
    $a <= $b, Menor o igual que, true si $a es menor o igual que $b.
    $a >= $b, Mayor o igual que, true si $a es mayor o igual que $b.
    $a <=> $b, Nave espacial, Un integer menor que, igual a, o mayor que cero cuando $a es respectivamente menor que, igual a, o mayor que $b.
    $a ?? $b ?? $c, Fusión de null, El primer operando de izquierda a derecha que exista y no sea null. null si no hay valores definidos y no son null.*/

    var_dump(0 == "a"); // 0 == 0 -> true
    var_dump("10" == "1e1"); // 10 == 10 -> true
    var_dump("1" == "01"); // 1 == 1 -> true
    var_dump(100 == "1e2"); // 100 == 100 -> true
    switch ("a") {
    case 0:
        echo "0";
        break;
    case "a": // nunca alcanzado debido a que "a" ya ha coincidido con 0
        echo "a";
        break;
    }

    // Integers
    echo 1 <=> 1; // 0
    echo 1 <=> 2; // -1
    echo 2 <=> 1; // 1

    // Floats
    echo 1.5 <=> 1.5; // 0
    echo 1.5 <=> 2.5; // -1
    echo 2.5 <=> 1.5; // 1

    // Strings
    echo "a" <=> "a"; // 0
    echo "a" <=> "b"; // -1
    echo "b" <=> "a"; // 1

    echo "a" <=> "aa"; // -1
    echo "zz" <=> "aa"; // 1

    // Arrays
    echo [] <=> []; // 0
    echo [1, 2, 3] <=> [1, 2, 3]; // 0
    echo [1, 2, 3] <=> []; // 1
    echo [1, 2, 3] <=> [1, 2, 1]; // 1
    echo [1, 2, 3] <=> [1, 2, 4]; // -1

    // Objects
    $a = (object) ["a" => "b"];
    $b = (object) ["a" => "b"];
    echo $a <=> $b; // 0

    $a = (object) ["a" => "b"];
    $b = (object) ["a" => "c"];
    echo $a <=> $b; // -1

    $a = (object) ["a" => "c"];
    $b = (object) ["a" => "b"];
    echo $a <=> $b; // 1

    // only values are compared
    $a = (object) ["a" => "b"];
    $b = (object) ["b" => "b"];
    echo $a <=> $b; // 1

        // Igual: ==
        // Idéntico: ===
        // Diferente: !=
        // Menor: <
        // Mayor: >
        // Menor o igual: <=
        // Mayor o igual: >=
        echo "<h1>Operadores de comparación</h1><br>";
        $x = 5;
        $y = 5;
        echo ($x == $y);
        echo ($x <= $y);

    //Operadores logicos
    /*$a, and $b, And (y), true si tanto $a como $b son true.
    $a or $b, Or (o inclusivo), true si cualquiera de $a o $b es true.
    $a xor $b, Xor (o exclusivo), true si $a o $b es true, pero no ambos.
    ! $a, Not (no), true si $a no es true.
    $a && $b, And (y), true si tanto $a como $b son true.
    $a || $b, Or (o inclusivo), true si cualquiera de $a o $b es true. */


    // "||" tiene una precedencia mayor que "or"

    // El resultado de la expresión (false || true) es asignado a $e
    // Actúa como: ($e = (false || true))
    $e = false || true;

    // La constante false es asignada a $f antes de que suceda la operación "or"
    // Actúa como: (($f = false) or true)
    $f = false or true;

    var_dump($e, $f);

    // "&&" tiene una precedencia mayor que "and"

    // El resultado de la expresión (true && false) es asignado a $g
    // Actúa como: ($g = (true && false))
    $g = true && false;

    // La constante true es asignada a $h antes de que suceda la operación "and"
    // Actúa como: (($h = true) and false)
    $h = true and false;

    var_dump($g, $h);


        // AND o &&: $a && $b es True si $a y $b son verdaderos
        // OR o ||: $a || $b es True si $a o $b son verdaderos
        // XOR: $a XOR $b es True si $a es verdadero o $b es verdadero, pero no los dos
        // !: !$a es True si $a es False
        echo "<h1>Operadores lógicos</h1><br>";
        $x = 4;
        $y = 5;

        if(($x==4) && ($y==5))
        {
            print("Estás en lo correcto");
        }
        echo "<br>";
        if(($x==4) OR ($y==3))
        {
            print("La segunda operación también es correcta");
        }


    //Operadores de union de cadenas
    
    //Existen dos operadores para datos tipo string. El primero es el operador de concatenación ('.'), el cual retorna el resultado de concatenar sus argumentos derecho e izquierdo. El segundo es el operador de asignación sobre concatenación ('.='), el cual añade el argumento del lado derecho al argumento en el lado izquierdo.

    $a = "Hola ";
    $b = $a . "Vida!"; // ahora $b contiene "Hola Vida!"

    $a = "Hola ";
    $a .= "Muerte!";     // ahora $a contiene "Hola Muerte!"

     // Para la unión de cadenas se emplea el punto (.)
     echo "<h1>Operadores de unión de cadenas</h1><br>";
     $t = "Ejemplo";
     $w = 'unión';
     $x = "de";
     $y = "cadenas";
     $z = ' ';
     $resultado1 = $t;
     $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
     echo '<b><h1>';
     echo $resultado1;
     echo '<hr>';
     echo $resultado2;
     echo '</b></h1>';
    
    ?>
</body>
</html>