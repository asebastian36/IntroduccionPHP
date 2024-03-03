<?php

declare(strict_types=1);//  es mas estricto el editor con los tipos de datos
include 'includes/header.php';

//  funcion que tiene dos parametros con un valor por default y retorna un entero
function sumar(int $numero = 1, int $numero1 = 1) : int
{
    $result = $numero + $numero1;
    echo '<p>Salida de sumar ' . $numero . ' + ' . $numero1 . ' = ' . $result . '</p><br>';
    return $result;
}

//  uso de parametros nombrados
sumar(numero1: 3, numero: 2);
sumar(2, 3);

include 'includes/footer.php';