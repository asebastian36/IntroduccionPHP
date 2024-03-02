<?php include 'includes/header.php';

//  arreglos indexados

//  opcion 1
//  $carrito = ['Tablet', 'Laptop', 'Telefono'];

//  opcion 2
$carrito = array('Tablet', 'Laptop', 'Telefono');

//  acceder a un elemento del array
echo "Elemento inicial: " . $carrito[0];

//  manipular el array

//  agregar un elemento (se requiere saber la longitud del arreglo)
$carrito[3] = 'Tv';

//  opcion 2
array_push($carrito, 'Monitor');

//  agregar al inicio
array_unshift($carrito, 'Gabinete');

//  acceder a todo el contenido
echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";

include 'includes/footer.php';