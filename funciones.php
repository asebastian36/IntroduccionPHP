<?php

declare(strict_types = 1);

function iniciandoApp() : ?string
{
    echo '<p>Iniciando la app...</p>';
    return '';
}

function sumar(int $numero = 1, int $numero1 = 1) : int
{
    $result = $numero + $numero1;
    echo '<p>' . $numero . ' + ' . $numero1 . ' = ' . $result;
    return $result;
}
