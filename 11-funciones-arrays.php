<?php include 'includes/header.php';

//  buscar elementos en un array o si existe
$carrito = ['Tablet', 'Telefono', 'Smart Watch'];
echo "<p>Buscar el elemento tablet en el arreglo carrito: </p>";
echo "<p>";
var_dump(in_array('Tablet', $carrito));
echo "</p>";
echo "<br>";

//  ordenar elementos de un arreglo indexado
$numeros = array(5, 4, 3, 8, 9, 2, 1, 6, 7);

print_r('Array ordenado de menor a mayor: ');
sort($numeros);
echo "<pre>";
print_r($numeros);
echo "</pre>";

print_r('Array ordenado de mayor a menor: ');
rsort($numeros);
echo "<pre>";
print_r($numeros);
echo "</pre>";

//  ordenar arreglo asociativo
$cliente = array(
  'saldo' => 200,
  'tipo' => 'premium',
  'nombre' => 'Angel'
);

print_r('Array asociativo ordenado por valores por orden alfabetico: ');
asort($cliente);
echo "<pre>";
print_r($cliente);
echo "</pre>";

print_r('Array asociativo ordenado por valores por orden alfabetico inverso: ');
arsort($cliente);
echo "<pre>";
print_r($cliente);
echo "</pre>";

print_r('Array asociativo ordenado por llaves segun el nombre de manera alfabetica: ');
ksort($cliente);
echo "<pre>";
print_r($cliente);
echo "</pre>";

print_r('Array asociativo ordenado por llaves segun el nombre de manera alfabeticamente inversa: ');
krsort($cliente);
echo "<pre>";
print_r($cliente);
echo "</pre>";

include 'includes/footer.php';