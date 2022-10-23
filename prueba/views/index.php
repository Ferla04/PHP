<?php 
    include '../database/db.php';
    include 'includes/header.php';
?>

<div class="container p-4">
    <div class="row">
        <?php 
            if( $_SESSION['auth'] == 'admin' ){
                include './includes/newTask.php'; 
            }
        ?>
        <?php include './includes/table.php' ?>
    </div>
</div>


<?php include 'includes/footer.php';?>

