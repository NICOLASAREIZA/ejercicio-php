<?php
/* Ejercicio 4 (Ejercicio de anidación de sentencias if: Escribe un programa que solicite al usuario que ingrese su edad. 
Si la edad es mayor o igual a 18 años, el programa debe preguntar si tiene licencia de conducir. Si la respuesta es "si", 
el programa debe imprimir "Puedes conducir".Si la respuesta es "No",el programa debe imprimir "Debes obtener una licencia de conducir primero".
Si la edad es menor de 18 años, el programa debe imprimir "No puedes conducir".) */

//colocamos la edad solicitada//

$edad = "18";

//creamos la variable de la donde se colocara la edad
$permiso = "si";

//a continuacion se hara una compraracion en si cumple con la edad de 18 y le dara el mensaje asignado
if($edad >= "18"){
    echo " ya tienes la edad para conducir pero ¿tienes permiso para conducir? ";
    echo $permiso;

} 
/*a continuacion se verificara si cumple con la edad y la licencia de conducción, 
se desplegara el mensaje de que si puede en caso de que salgo que si*/
if($permiso== "si"){
    echo ", entonces puedes conducir";
}
//si sale que no cumple saldra el mensaje de que debera conseguir la licencia
if($permiso == "no"){
   echo "Debes obtener una licencia";
}
//si no cumple con la edad requeria saldra el siguiente anunciado
elseif($edad < "17"){
    echo "No puedes conducir";
}


?>