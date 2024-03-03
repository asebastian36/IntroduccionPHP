<?php include 'includes/header.php';

$i = 1;

echo 'Uso del while: <br>';
while ($i <= 10) {
    if($i != 10) echo $i . ', ';
    else echo $i;
    $i++;
}

echo '<br>';

$i = 1;

echo '<br>Uso del do while: <br>';
do {
    if($i != 10) echo $i . ', ';
    else echo $i;
    $i++;
} while($i <= 10);
echo '<br>';

echo '<br>Uso del foreach para arreglos indexados: <br>';
$clientes = ['Angel', 'Diego', 'Barbara', 'Elisa'];

foreach ($clientes as $person) {
    echo $person . '<br>';
}

echo '<br>Uso del foreach para arreglos asociativos: <br>';
$clientes = [
    'nombre' => 'Angel',
    'saldo' => 400,
    'tipo' => [
        'precio' => 'Premium'
    ],
    'status' => [
        'estadoCivil' => 'Soltero'
    ]
];

// no imprimira las llaves
foreach ($clientes as $person) {
    if (is_array($person)) {
        //  imprimira llaves
        foreach ($person as $llave => $valor) echo  $llave . ' => ' .$valor . '<br>';
    } else echo $person . '<br>';
}

echo '<br>Para saber la longitud del arreglo:<br>';
print_r('sizeof: ' . sizeof($clientes) . '<br>');
print_r('count: ' . count($clientes) . '<br>');

echo '<br>Uso del for loop en ejercicio Fizzbuzz: <br>';
for($i = 1; $i <= 30; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) echo $i . ' - Fizbuzz <br>';
    elseif ($i % 3 === 0) echo $i . ' - Fiz <br>';
    elseif ($i % 5 === 0) echo $i . ' - Buzz <br>';
    else echo $i . '<br>';
}

include 'includes/footer.php';