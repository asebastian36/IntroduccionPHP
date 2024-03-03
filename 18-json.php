<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 350,
        'disponible' => true
    ],
    [
        'nombre' => 'Telefono',
        'precio' => 250,
        'disponible' => true
    ],
    [
        'nombre' => 'Smartwatch',
        'precio' => 200,
        'disponible' => true
    ]
];

echo '<pre>';
print_r($productos);
echo '</pre>';

echo '<br>';

//  toma un arreglo y lo convierte en string ideal para comunicar aplicaciones
$json = json_encode($productos, JSON_PRETTY_PRINT);
echo '<pre>';
print_r($json);
echo '</pre>';

echo '<br>';

//  convierte un json (en un arreglo) en un arreglo
$jsonArray = json_decode($json);
echo '<pre>';
print_r($jsonArray);
echo '</pre>';

include 'includes/footer.php';