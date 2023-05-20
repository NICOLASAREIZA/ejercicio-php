<?php
/*Ejercicio 9 (Escribe un programa que tome una hora en formato "HH:MM" como esntrada y muestre un mensaje diferente según la franja horaria, 
utilizando el ciclo "match".)*/

//
$numeros = "3:00";

//En caso de que la hora este resgistrada el resultado sera
$resultados = match (true){
    $numeros === "10:30" => "utc 5:30 a.m Hora en Berlín",
    $numeros === "09:00" => "utc 6:00 a.m hora en Dubái",
    $numeros === "1:00" => "utc 2:00 p.m Hora en Boston",
    $numeros === "19:00" => "utc +1 Hora en cuba",

    //Si la respuesta es erronea o no existe la respuesta es
    default => " ERROR"
};

//función de visualización
echo $resultados;

?>