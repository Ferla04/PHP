<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container" style="height: 100vh;"> 
        <div class="alert alert-primary" role="alert">
            <strong>user:</strong> user <strong>password:</strong> 12345
            <br>
            <strong>admin:</strong> admin <strong>password:</strong> 12345
        </div>
        <div class="row align-items-center">
            <div class="col-6">
                <?php include 'includes/login.php' ?>
            </div>
            <div class="col-6">
                <?php include 'includes/register.php' ?>
            </div>
            
        </div>
    </div>
    
</body>
</html>