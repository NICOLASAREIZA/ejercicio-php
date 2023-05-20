 <?php
/*Ejercicio 7 (diseña un programa que tome una nota numérica del 0 al 100 como entrada y muestre un mensaje sdiferente según 
el rango de la nota, utilizando el ciclo "match". Por ejemplo, si la nota está entre 90 y 100, mostrar "Exelente". */

//Se determina la variable solicitada
$nota = 80;

//en caso de que el usuario escriba la variable correcta el resultado sera
$resultado = match (true){
    $nota === 10 => "Reprobaste",
    $nota === 20 => "Esfuerzate mas ",
    $nota === 30 => "Nota baja",
    $nota === 40 => "Repasa mas",
    $nota === 50 => "un poco mas",
    $nota === 60 => "Repasa mas",
    $nota === 70 => "Animate mas",
    $nota === 80 => "Casi lo logras",
    $nota === 90 => "Exelente",
    $nota === 100 => "Felicidades",

    //si la variable es incorrecta el resultado sera
    default => "Perimetro no valido"
};

//función de visualización
echo $resultado;

?>