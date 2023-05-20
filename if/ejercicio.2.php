<?php

/*ejercicio 2 (Ejercicio de comparación de cadenas: Escribe un programa que solicite al usuario que ingrese su nombre. 
Si el nombre ingresado es "juan, el programa debe imprimir ¡Hola, juan! en la pantalla. Si el nombre es diferente, 
el programa debe imprimir"Lo siento no te conozco.")*/

//variable solicitada
$nombre1 = "juan";


//si se escribe el nombre correcto el resultado sera
if($nombre1=== "juan"){
    echo "Hola,juan";
}

//en caso de que el nombre no sea correcto el resultado sera
else{
    echo "lo siento, no te conozco";
}

?>