<?php
/*Ejercicio 10 (Crea un programa que reciba una opción del 1 al 5 como entrada y realice una acción diferente según la opción, 
utilizando el ciclo "match".)*/

//Determinar la variable solicitada 
$numero = 2;

//Datos validos en caso de que la respuesta sea correcta 
$resultado = match (true){
    $numero === 1 => "Gato",
    $numero === 2 => "Perro",
    $numero === 3 => "Loro",
    $numero === 4 => "Paloma",
    $numero === 5 => "Elefante",

    //Si el dato ingresado es erroneo la respuesta es
    default => "ERROR"
}

//función de visualización
echo $resultado;

?>