<?php include 'includes/header.php';

$nombre = null;
$nombre = " Angel Sebastian ";

//  saber longitud de cadena
echo strlen($nombre);
echo "<br>";

//  saber el tipo, longitud y mostrar el contenido
var_dump($nombre);
echo "<br>";

//  eliminar los espacios en blanco
$texto = trim($nombre);
var_dump($texto);
echo "<br>";

//  para pasarlo a mayuscula
echo strtoupper($nombre);
echo "<br>";

//  para pasarlo a minuscula
echo strtolower($nombre);
echo "<br>";

//  caso de uso en validacion
$mailOriginal = "correo@correo.com";
$mailCopia = "Correo@correo.com";

var_dump(strtolower($mailOriginal) === strtolower($mailCopia));
echo "<br>";

//  replace

//  1ero elemento a remplazar,
// 2do el elemento de cambio,
// 3ero en que variable se aplica
echo str_replace('Angel', 'A', $nombre);
echo "<br>";

//  revisar si un string existe o no
echo strpos($nombre, 'A');
echo "<br>";

//  concatenar
$tipoCliente = "premium";
echo "El cliente " . $tipoCliente . " con el nombre" . $nombre;
echo "<br>";

//  opcion 2
echo "El cliente ${nombre} es ${tipoCliente} ";
echo "<br>";

include 'includes/footer.php';