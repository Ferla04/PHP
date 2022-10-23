<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $multiplicacion = $valorA * $valorB;
    $division = $valorA / $valorB;

    echo $suma.'<br />'.$resta.'<br />'.$multiplicacion.'<br />'.$division.'<br />';

    if( $valorA > $valorB ){
        echo 'Valor A es mayor que valor B';
    }else if( $valorA < $valorB ){
        echo 'Valor B es mayor que valor A';
    }else{
        echo 'Los dos son iguales';
    } 


    if( ($valorA > $valorB) || ($valorA == $valorB) ){
        echo '<br /> A es superior';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>

    <form action="operadoresAritmeticos.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br />

        Valor B:
        <input type="text" name="valorB" id="">
        <br />

        <input type="submit" value="Calcular">
    </form>

</body>
</html>