<?php
/*Ejercicio 2 (Crea un programa que reciba el nombre de un color como la entrada y muestre un mensaje diferente según el color, 
utilizando el ciclo "match". Por ejemplo, si el color es rojo, mostrara "El color es cálido".)*/

//Se genera la variable solicitada 
$color = 'verde';

//en caso de escojer un color que este registrado el resultado sera 
$action  = match ($color){
    'blanco' => 'El color es simple',
    'rojo' => 'El color es calido',
    'rosado' => 'El color es clarito',
    'negro' => 'El color es oscuro',

    //si el color no existe o no esta registrado el resultado sera 
    default => 'color desconocido'
};

echo $action;
?>
