<?php

/*Ejercicio 8 (Desarrollar un programa que tome una cadena de texto como entrada y muestre un mensaje según la longitud de la cadena,
utilizando el ciclo "match".Por ejemplo, si la longitud es mayor a 10 caracteres, mostrar "la cadena es larga".) */

//se generan las variables solicitadas en el ejercicio
$palabra = 'elefante';
$contar = strlen($palabra);

// en caso de que la variable si se encuentre en los datos la respuesta sera 
$resultado = match(true){
    
    $contar <=9 => "la cadena es corta",
    $contar >=10 => "la cadena es larga"
};

//función de visualización
echo $resultado;
?>

