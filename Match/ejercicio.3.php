<?php
/*Ejercicio 3 (Diseña un programa que tome una letra como entrada y muestre un mensaje según la categoria a la que pertenezca 
la letra utilizando el ciclo "match". Por ejemplo, si la letra es una vocal, mostrar "Es una vocal")*/

//se asigna la variable principal y se registrar las variables en los datos
$vocal = 'd';

$a = 'a';
$e = 'e';
$i = 'i';
$o = 'o';
$u = 'u';

$x = 'X';
$y = 'y';
$z = 'z';

//si se elije alguna variable registrada el resultado sera 
$resultado = match ($vocal){
    $a => 'es una vocal',
    $e => 'es una vocal',
    $i => 'es una vocal',
    $o => 'es una vocal',
    $u => 'es una vocal',
    $x => 'es del abecedario',
    $y => 'es del abecedario',
    $z => 'es del abecedario',

    //si la variable no coincide el resultado sera 
    default => "no valido"

};

//funcion de visualización
echo $resultado

?>