<?php 
//Variables
    $edad = 18;
    $altura = 1.6;
    $programador = true;

    $edad = 19;

//constantes
    define('NOMBRE','Fer');

    echo 'Mi nombre es '.NOMBRE.'<br /> tengo '.$edad.' años <br /> mido '.$altura.'<br />';

//ARRAYS
    $frutas = array('Fresa', 'Banano', 'Pera', 'Manzana');
    print_r( $frutas );
    echo '<br />';

    //Se pueden aignar el indice
    $frutas = array('F'=>'Fresa', 'B'=>'Banano', 'Pera', 'Manzana');
    print_r( $frutas );
    echo '<br />'.$frutas['B'].'<br />';

    foreach($frutas as $indice => $valor){
        echo $indice.'=>'.$valor.'<br />';
    }
?>