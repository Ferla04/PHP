<?php

$jsonContenido = '[
    {"nombre": "Fernanda", "apellido": "Velasquez"},
    {"nombre": "juan", "apellido": "Reyes"}
]';

//--------------- DECODE -------------------------
    $resultado = json_decode( $jsonContenido );
    //print_r($resultado);

    foreach( $resultado as $persona ){
        echo  $persona->nombre.' '.$persona->apellido.'<br />' ;
    }

//--------------- ENCODE -------------------------

    $personas = array('Fernanda'=>19, 'Juan'=>20 );

    echo json_encode( $personas );

?>