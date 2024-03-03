<?php

declare(strict_types = 1);
include 'includes/header.php';

//    tipos de retornos: bool de un tipo, ?bool de un tipo o nada, bool | int de dos tipos
function isAutenticated(bool $user) : bool
{
    if ($user) return true;
    else return false;
}

$user = true;

if (isAutenticated($user)) echo '<p>El usuario esta autenticado</p>';
else echo '<p>El usuario no esta autenticado</p>';

include 'includes/footer.php';