<?php include './template/header.php'; ?>

<div class="p-5 bg-dark text-light">
  <div class="container">
    <h1 class="display-3">Bienvenid@ <?= $userName?></h1>
    <hr class="my-2">
    <p class="lead">Administra tus libros para que tengan visibilidad en el sitio web</p>
    <a class="btn btn-primary btn-lg" href="<?= $ADMIN_URL ?>/section/books.php" role="button">Comenzar!</a>
  </div>
</div>

<?php include './template/footer.php'; ?>
