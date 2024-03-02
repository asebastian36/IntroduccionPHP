<?php include 'includes/header.php';

//  uso de operadores ||, &&
$autenticado = false;
$admin = false;

if ($autenticado && $admin) echo '<p>Usuario autenticado correctamente</p>';
else echo '<p>Usuario no autenticado</p>';

//  if's anidados
$cliente = [
  'nombre' => 'Angel',
  'saldo' => 200,
  'informacion' => [
      'tipo' => 'premium'
  ]
];

echo "<br>";

if ( !empty($cliente) ) {
    if ($cliente['saldo'] > 0) {
        echo '<p>El cliente tiene saldo disponible';
    }

    echo "<p>El arreglo de cliente no esta vacio</p>";

} else {
    echo "<p>El arreglo de cliente esta vacio</p>";
}

echo "<br>";

//  else if
if ($cliente['saldo'] > 0) {
    echo "<p>El cliente tiene saldo</p>";
} elseif ($cliente['informacion']['tipo'] === 'Premium') {
    echo "<p>El cliente es premium</p>";
} else {
    echo "<p>No hay un cliente definido o no tiene saldo o no es premium</p>";
}

//  switch
$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'PHP':
        echo '<p>PHP, es un buen lenguaje</p>';
        break;

    case 'JavaScript':
        echo '<p>JavaScript, es un lenguaje regular</p>';
        break;

    case 'Java':
        echo '<p>Java, es un excelente lenguaje</p>';
        break;

    case 'Python':
        echo '<p>Python, es un excelente lenguaje</p>';
        break;

    default:
        echo '<p>No se que lenguaje es</p>';
}

include 'includes/footer.php';