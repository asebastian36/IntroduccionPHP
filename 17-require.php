<?php require 'includes/header.php';//    incluye otros archivos, util para reutilizar codigo

/*
 * Diferencia entre include, require y require_once, si no encuentra un recurso
 *  en require la aplicacion falla
 * si no encuentra un include puede seguir funcionando la aplicacion, con require_once
 *  revisa si el elemento ya esta incluido y si esta incluido elimina la copia
 */

//  usando una funcion de otro archivo
require 'funciones.php';

iniciandoApp();
sumar(100, 29);

include 'includes/footer.php';//    pueden llevar parentesis o no