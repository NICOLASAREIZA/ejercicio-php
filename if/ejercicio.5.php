<?php
/*Ejercicio 5 (Ejercicio de uso de operadores lógicos: Escribe un programa que solicite al usuario que ingrese dos números. 
Luego, el programa debe imprimir si ambos Números son mayores de 10 utilizando la sentencia de if y los operadores lógicos "&&" y ">".
Si ambos números son mayores que 10, el programa debe imprimir "ambos números son mayores que 10".
Si solo uno de los números es mayor que 10, el programa debe imprimir "Solo uno de los números de es mayor que 10".
Si ninguno de los números es mayor que 10, el programa debe imprimir "Ninguno de los números es maypr que 10". )*/

//se crean las variables de los dos numeros solicitados 
$primerNumero = "2";
$segundoNumero = "11";

//si los dos números solicitados son mayores de 10 el resultado sera 
if($primerNumero > 10 && $segundoNumero > 10){
    echo "los dos numeros son mayores que a diez";
}
//si uno de los numeros es mayor de 10 el resultado sera 
elseif($primerNumero < 10 && $segundoNumero > 10){
    echo "solo uno de los numero es mayor que a diez";
}

//si ninguno de los números es mayor a 10 el resultado sera
elseif($primerNumero && $segundoNumero <10){
    echo "ningunos de los dos es mayor";
}

?>