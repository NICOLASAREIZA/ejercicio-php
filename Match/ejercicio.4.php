
<?php
/*Ejercicio 4 (Desarrolla un programa que tome una fecha como entrada en formato "día-mes-año" 
y muestre un mensaje diferente según el mes utilizando el ciclo "match".)*/

//se determina la variable que va a ser modificada por el usuario
$numero= '1-enero-2023';


//en caso de que el usuario elija una fecha correcta el resultado sera
$fecha =  match($numero){
    '1-enero-2023'=> 'Año nuevo',
    '8-marzo-2023'=> 'dia de la mujer',
    '2-abril-2023'=> 'Día Internacional de Libro Infantil y Juvenil',
    '1-mayo-2023' => 'Día Internacional de los Trabajadores',
    '23-junio-2023' => 'Noche de San Juan',

    //si la fecha esta mal, el resultado sera 
    default => "No existe"
    
};

//función de visualización
echo $fecha;
?>

