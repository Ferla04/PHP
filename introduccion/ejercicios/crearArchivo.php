<?php

$nombreArchivo = 'crearArchivo.txt';
$contenidoArchivo = 'Hola, saludos';

$archivoACrear = fopen( $nombreArchivo, 'w' );

fwrite( $archivoACrear, $contenidoArchivo );
fclose( $archivoACrear );

echo 'Archivo Creado';

?>