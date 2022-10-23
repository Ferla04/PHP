<div class="col-md-4">
    <?php if( isset($_SESSION['taskSaved']) ) {?>
        <div class="alert alert-<?= $_SESSION['taskSaved']['color'] ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['taskSaved']['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php unset($_SESSION['taskSaved']); }?>

    <div class="card card-body bg-dark text-light">
        <form action="../controllers/tasks/save_task.php" method="post">
            <input class="form-control" type="text" name="title" placeholder="Task title" autocomplete="off" required>
            <input class="form-control mt-2" type="datetime-local" name="date" required >
            <textarea class="form-control mt-2" name="description" placeholder="Task description" rows="2" required ></textarea>
            <input style="width: 100%;" class="btn btn-primary d-block mt-3" type="submit" name="save_task" value="Save Taks">
        </form>
    </div>
</div>