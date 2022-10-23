<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php //include '48446846446.php'; ?> <!-- ERROR  -->
    <?php include 'include2.php'; ?> 
    <?php include_once 'include2.php'; // Incluir una vez ?> 
    <br />
    <?php echo 'Hola estoy en la pagina principal'; ?>
    
    <!--Direfencia entre el include y el require -->
    <!--
        Es que al momento de tener un error con el include este lo mostrará en pantalla
        y continuará con el proceso, en cambio en requite no. 
    -->

</body>
</html>