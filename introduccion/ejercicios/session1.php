<?php

session_start();

//Declaracion de variables tipo $_SESSION
$_SESSION['usuario'] = 'Fer';
$_SESSION['status'] = 'logueado';

echo 'Sesion iniciada: <br /> ve al archivo session2';


?>