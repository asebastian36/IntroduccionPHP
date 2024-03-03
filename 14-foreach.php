<?php include 'includes/header.php';

//  Arreglo indexado de arreglos indexados
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

foreach ($productos as $producto) { ?>
    <!-- termina el codigo de PHP -->
    <li>
        <!-- Combinacion html con PHP -->
        <p>Nombre: <?php echo $producto['nombre']?></p>
        <p>Precio: $<?php echo $producto['precio']?></p>

        <!-- Opcion con operador terneario -->
        <?php echo ($producto['disponible']) ?  '<p>Disponible</p>' : '<p>No disponible</p>';?>

        <!--
            <?php
            //  opcion con if/else
                if ($producto['disponible']) echo '<p>Disponible</p>';
                else echo '<p>No disponible</p>';
            ?>
        -->
    </li>
    <?php
    //  vuelve a empezar el codigo en PHP
}



include 'includes/footer.php';