<?php

$archivo = 'LeerArchivo.txt';
$archivoAbierto = fopen($archivo, 'r'); //Abrir archivo

$contenido = fread($archivoAbierto, filesize($archivo)); //Leer archivo

echo $contenido;

?>