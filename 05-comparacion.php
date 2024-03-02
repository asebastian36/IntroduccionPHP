<?php include 'includes/header.php';

$numero0 = 10;
$numero1 = 20;
$numero2 = 30;
$numero3 = "40";

var_dump($numero0 > $numero1);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero0 >= $numero1);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

//  revisa solo el valor
var_dump($numero1 == $numero3);
echo "<br>";

//  revisa el valor y el tipo de dato
var_dump($numero1 === $numero3);
echo "<br>";

//  valoracion que retorna numeros -1 = si el de la izquierda es menor
// 0 = igual si son iguales
// 1 = es mayor el de la derecha
var_dump($numero1 <=> $numero3);
echo "<br>";

include 'includes/footer.php';