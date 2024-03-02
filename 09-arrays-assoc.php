<?php include 'includes/header.php';
//  arreglos asociativos

/*
    opcion 1:
     $clientes = array(
      'nombre' => 'A',
      'apellido' => 'F',
      'informacion' => array(
          'tipo' => 'premium'
      )
    );
*/

//  opcion 2
$clientes = [
    'nombre' => 'Angel Sebastian',
    'apellido' => 'Franco Lopez',
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

//  acceder a un elemento
echo "Cliente: " . $clientes['nombre'] . "<br>";

//  acceder a un elemento anidado
echo "Tipo de cliente: " . $clientes['informacion']['tipo'] . "<br> Disponibilidad: " . $clientes['informacion']['disponible'] . "%";

//  agregar elementos al arreglo anidado despues de la declaracion
$clientes['codigo'] = 123456789;

//  acceder a todos los elementos
echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo "<br>";

include 'includes/footer.php';