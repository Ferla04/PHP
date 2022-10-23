<?php

function imprimirNombre( $nombre, $apellido = '' ){
    echo 'Hola '.$nombre.' '.$apellido.'<br />';
}

imprimirNombre('Fer');
imprimirNombre('Juan', 'Reyes');

?>