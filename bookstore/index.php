<?php include './template/header.php'; ?>

<div class="p-5 bg-dark text-light my-4 text-center">
  <div class="container">
    <h1 class="display-3">Bienvenidos al sitio web Bookstore</h1>
    <hr class="my-2" />
    <p class="lead">Encuentra libros que te ayudaran a guiarte por este hermoso mundo de la programación</p>
    <img class="img-thumbnail rounded mx-auto d-block" width="400" src="https://s3.amazonaws.com/tf-nightingale/2020/01/NewDecadeCampaign_20200107_Blog-Header_04.jpg" alt="">
    <a class="btn btn-primary mt-4" href="<?= $URL?>/books.php" role="button">Ver almacen de libros</a>
  </div>
</div>

<?php include './template/footer.php'; ?>
