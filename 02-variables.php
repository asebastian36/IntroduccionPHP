<?php include 'includes/header.php';

//  creacion de variables
$_variable = 'Hola mundo';// si puede llevar guiones el nombre al inicio o al final
var_dump($_variable);

//  para constantes
define('constante', 'Soy el valor de la constante');
var_dump(constante);

const pi = 3.1416;
var_dump(pi);

//  sintaxis mas comun
$nombre_cliente = "PALALALA";
$nombreCliente = 'PALALALA';

include 'includes/footer.php';