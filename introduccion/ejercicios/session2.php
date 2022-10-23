<?php
session_start();

//Leer la informacion de la session
if( isset($_SESSION['usuario']) ){
    echo 'Usuario: '.$_SESSION['usuario'].', Status: '.$_SESSION['status'];
}else{
    echo 'Inicia session en el archivo de session1';
}

?>