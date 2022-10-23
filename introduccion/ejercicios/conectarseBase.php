<?php

//Restablecer contraseña de mysql https://www.youtube.com/watch?v=ivmY43PdXbw

$servidor = 'localhost';
$usuario = 'root';
$contraseña = 'Copo04';

try {

    $conexion = new PDO( "mysql:host=$servidor;dbname=album", $usuario, $contraseña );
    $conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    /*
    //INSERTAR A LA BASE DE DATOS:

        $InsertSql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
        $conexion->exec($InsertSql);
    */

    //TRAER INFOMACION
        $selectSql = "SELECT * FROM `fotos`";
        $sentencia = $conexion->prepare($selectSql); // se almacena el resultado de la consulta en la variable
        $sentencia->execute();

        //obtener info
        $resultado = $sentencia->fetchAll();

        print_r( $resultado );
    
    echo 'conexion establecida';
}catch( PDOException $error ){
    echo 'conexion erronea'.$error;
}



?>