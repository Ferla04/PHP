<?php

    for( $i = 0; $i < 10; $i++ ){
        echo 'Numero '.$i.'<br />';
    }

//------------------------------------------------
    $numeroDO = 0;

    do{
        echo 'do '.$numeroDO.'<br />';
        $numeroDO++;
    }while( $numeroDO < 10 );


//------------------------------------------------
    $numeroWhile = 0;

    while( $numeroWhile < 10 ){
        echo 'while '.$numeroWhile.'<br />';
        $numeroWhile++;
    }

?>