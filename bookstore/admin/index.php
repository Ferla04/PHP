<?php

session_start();

if( $_SESSION ){
  header('Location:./section/books.php');
}

if( $_POST ){

  if( $_POST['user'] === 'admin' && $_POST['password'] === '12345' ){
    $_SESSION['user'] = true;
    $_SESSION['userName'] = 'administrador';
    header('Location:home.php');
  }else{
    $mensaje = 'Error: Usuario o contraseña incorrectos';
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Administrador</title>
</head>
<body>

  <div style="height: 100vh;" class="container d-flex justify-content-center align-items-center">
    <div style="width: 30%;" class="card bg-dark text-light">
      <div class="card-header"> Login </div>
      <div class="card-body">

        <?php if( isset($mensaje) ) {?>
          <div class="alert alert-danger" role="alert">
            <strong><?= $mensaje?></strong> 
          </div>
        <?php }?>
        
        <form method="post">
          <div class="mb-3">
              <label class="form-label">User</label>
              <input type="text" class="form-control" name="user" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>

      </div>
    </div>
  </div>
    
</body>
</html>