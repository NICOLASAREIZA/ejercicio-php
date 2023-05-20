<?php
/*Ejercicio 1 (Escribe un programa que tome un número entero como entrada y muestre un mensaje diferente dependiendo de si
 el número es 1,2 o 3 utilizando el ciclo de "match".)*/

 //Se generan las variables encontradas en el ejercicio
 $entero = 10;

$a = 1;
$b = 2;
$c = 3;

//Si se elije alguna variable correcta el mensaje sera el siguiente
$resultado = match ($entero){

    $a => "Bienvenido",
    $b => "Que tal",
    $c => "Good bye",

    //en caso de que la variable sea erronea el resultado sera
    default => "No es valido"

};

//Función de visualización
echo $resultado;

?>

