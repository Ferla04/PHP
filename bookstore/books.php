<?php include './template/header.php'; ?>
<?php
require './credentials.php';
require 'admin/func/CRUD.php';
include 'admin/config/db.php';
$connection = new ConnectionMysql($SERVER, $USER, $PASSWORD, $DATABASE);
$booksList = selectAllMysql( $connection );
?>

<?php foreach( $booksList as $book ){?>
  <div class="col-md-3">
    <div class="card">
      <img class="card-img-top" src="img/<?= $book['image'] ?>" alt="<?= $book['name'] ?>">
      <div class="card-body">
        <h4 class="card-title"><?= $book['name'] ?></h4>
        <a class="btn btn-primary" href="https://goalkicker.com/" target="_blank" role="button">Ver más...</a>
      </div>
    </div>
  </div>
<?php }?>

<?php include './template/footer.php'; ?>