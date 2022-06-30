<?php
    if(isset($id)){
        $title = "Update Task";
        $submit_name = "update_task";
        $file = "update-task.php?id=$id";
    }else{
        $title = "Add new Task";
        $task = "";
        $details= "";
        $submit_name = "save_task";
        $file = "save-task.php";
    }
?>

<div class="card card-body">
    <div class="card card-title text-center"><?= $title ?></div>
    <form action="<?= $file ?>" method="post">
        <div class="form-group mb-2">
            <input type="text" name="task" class="form-control" placeholder="Task title" value="<?= $task ?>">
        </div>
        <div class="form-group">
            <textarea type="text" name="details" class="form-control" placeholder="Task details" rows="3" autofocus><?= $details ?></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block" name="<?=$submit_name?>">
            <?= $title ?>
        </button>

    </form>
</div>