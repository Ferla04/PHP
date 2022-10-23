<?php

if( $_POST || $_FILES ){
    print_r ( $_POST );
    print_r( $_FILES ); 

    move_uploaded_file( $_FILES['archivo']['tmp_name'], 'C:\xampp\htdocs\ejercicios\save_img_input_file\F-'.$_FILES['archivo']['name'] );
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="recepcionDatos2.php" enctype='multipart/form-data' method="post">

        Imagen:
        <br />
        <input type="file" name="archivo" id="">
        <br />
        <input type="submit" value="Enviar Info" name="enviar" >
    </form>
</body>
</html>