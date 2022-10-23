<?php
// Documentacion: https://www.php.net/manual/es/funcref.php

echo rand( 1, 10 ); // Numero aleatorio
echo '<br />';
echo strtoupper( 'Fer' );
echo '<br />';
echo date(' Y - m - d ');
echo '<br />';

//Funciones para arreglos

$frutas = array('Fresa', 'Pera', 'Manzana');
array_push( $frutas, 'Banano' );
print_r( $frutas );

?>