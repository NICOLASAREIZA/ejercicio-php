<?php
/*Ejercicio 5 (Escribe un programa que tome un número del 1 al 7 como entrada y muestre el nombre del dia de la semana correspondiente, 
utilizando el ciclo "match".)*/

//se genera la variable principal
$dia = 7;

//si la variable existe el resultado sera 
$resultado = match (true){

    $dia === 1 =>'Lunes',
    $dia === 2 =>'Martes',
    $dia === 3 =>'Miercoles',
    $dia === 4 =>'Jueves',
    $dia === 5 =>'Viernes',
    $dia === 6 =>'Sabado',
    $dia === 7 =>'Domingo',

    //si la variable o el numero no coinciden el resultado sera
    default => "no existe"
};

//función de visualización
echo $resultado;
?>