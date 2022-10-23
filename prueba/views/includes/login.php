<?php
session_start();
if( $_POST ){
    
    $user = $_POST['user'];
    $password = $_POST['password'];

    if( strlen($user) < 1  || strlen($password) < 1 ){
        echo "<script> alert('Llene todas las cajitas') </script>";
        header('location: ../auth.php');
    }else if( $user == 'user' && $password == '12345' ){

        $_SESSION['auth'] = 'user';
        header('location: ../index.php');
    }else if( $user == 'admin' && $password == '12345' ){

        $_SESSION['auth'] = 'admin';
        header('location: ../index.php');
    }
    else{
        echo "<script> alert('user o contraseña incorrecta') </script>";
        header('location: ../auth.php');
    }
}

?>


<div class="card bg-dark text-light">
    <div class="card-header">
        sign in
    </div>
    <div class="card-body mx-5">
        <form action="./includes/login.php" method="post">
            <label for="user"> User: </label>
            <input class="form-control" type="text" name="user" id="user">
            <br>
            <label for="password"> Password: </label>
            <input class="form-control" type="password" name="password" id="password">
            <input style="width: 100%;" class="btn btn-primary d-block my-3" type="submit" value="sign in">
        </form>
    </div>
</div>