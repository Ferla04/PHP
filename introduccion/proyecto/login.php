<?php
session_start();
if( $_POST ){

    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    if( strlen($usuario) < 1  || strlen($contrasenia) < 1 ){
        echo "<script> alert('Llene todas las cajitas') </script>";
    }else if( $usuario == 'Fer' && $contrasenia == '12345' ){

        //Crear Variable de session
        $_SESSION['usuario'] = $usuario;

        header('location:index.php');
    }else{
        echo "<script> alert('usuario o contraseña incorrecta') </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div style="height: 100vh;" class="row align-items-center">

            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        Iniciar sesion
                    </div>
                    <div class="card-body">

                        <form action="login.php" method="post">
                            Usuario: <input class="form-control" type="text" name="usuario" id="">
                            <br />
                            Contraseña: <input class="form-control" type="password" name="contrasenia" id="">
                            <br />
                            <button class="btn btn-success" type="submit"> Entrar al portafolio </button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>


    
</body>
</html>