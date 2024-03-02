<?php include 'includes/header.php';

$clientes = [];
$clientes1 = array();
$clientes2 = array('Angel', 'Diego', 'Chucho');
$cliente = [
    'nombre' => 'Angel',
    'saldo' => '1000'
];

//  revisar si el arreglo esta vacio o no
var_dump( empty($clientes) );
var_dump( empty($clientes1) );
var_dump( empty($clientes2) );

//  revisar si un arreglo esta creado o si una propiedad de un arreglo asociativo esta definida
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );

var_dump( isset($cliente['codigo']) );

include 'includes/footer.php';