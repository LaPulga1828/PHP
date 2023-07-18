<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y contantes</title>
</head>
<body>
    <h1>Variables y contantes en PHP</h1>
    
    <?php
    //VARIABLES
        //1. la forma de representar las variables en PHP es anteponiendo el simbolo "$" a la palabra que utilizaremos como variable;Ejemplo: $edad
        /*2. Debemos prestar atencion a las mayusculas y minusculas ya que PHP reconoce la diferencia entre las dos. "$valor" es diferente de "$VALOR"*/
        //3. ¡para que se utilizan las variables? gracias a ellas podemos realizar operaciones aritmeticas y operaciones en cadenas, etc
        //4. Las variables las utilizaremos como y cunado queramos en una pagina ya que no existe limitacion en cuanto a su uso
        //5. Hay que prestar atencon a no provocar errores pr utilizar palabras reservadas por el lenguaje. Ejemplo:$os se genera unerror, porque es  una variable  predefinida
        //6. Tambien se  debe evitar el error de empezar ua variable por un numero. Ejemplo:$35var = 45 es une error
        //7. En PHP no es necesario especificar el tipo de variable. pero si debdemos saber cuando utilizar las comillas a la hora de definirlas, ya que su uso indicaria que se esta hablando de una cadena. Ejemplo: $cuenta=7 nombre= "nestor"
        //8. Podemos mostrar las variables  enuna pantalla  de varias maneras: una de ellas puede ser utilizando la opcion echo(); otra puede ser mediante print();
        
        $a=5;
        $b="7";
        echo"<b><h1>";
        echo($a);
        echo"<br>";
        echo($b);
        echo"</b></h1>";

    //CONSTANTES
        //La forma de definr una constante es mediante la funcion"define"
        //Sintaxis:define("nombre_variable","valor_variable")

        define("capital_colombia","Bogota");
        define("Habitantes",7000000);



    ?>
    
</body>
</html>