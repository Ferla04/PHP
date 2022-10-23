<?php

if($_POST){

    $boton = $_POST['btnValor'];

    switch ($boton) {
        case '1': echo 'Click en el boton 1';
            break;

        case '2': echo 'Click en el boton 2';
            break;
        
        default: echo 'Click en el boton 3';
            break;
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

    <form action="switchCase.php" method="post">

        <input type="submit" name="btnValor" value="1">
        <input type="submit" name="btnValor" value="2">
        <input type="submit" name="btnValor" value="3">

    </form>

</body>
</html>