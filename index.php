<?php include("include/header.php") ?>
<?php include ("db.php");  ?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION["message"])){ ?>
            <div class="alert alert-<?= $_SESSION["message_type"]?> alert-dismissible fade show" role="alert">
                <?= $_SESSION["message"] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
           <?php  }  ?>
            <?php $_SESSION["message"] = null; session_unset(); ?>

<!--            <div class="card card-body">-->
<!--                <form action="save-task.php" method="post">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" name="title" class="form-control" placeholder="Task title">-->
<!--                    </div>-->
<!--                   <div class="form-group">-->
<!--                       <textarea type="text" name="details" class="form-control" placeholder="Task details" rows="3" autofocus></textarea>-->
<!--                   </div>-->
<!--                    <input type="submit" class="btn btn-success btn-block" name="save_task">-->
<!---->
<!--                </form>-->
<!--            </div>-->

            <?php include("form/form.php") ?>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "select * from task";
                    $result = mysqli_query($conn, $query);
                    if(!$result){ ?>
                        <h2>Not data Found</h2>
                    <?php }else{?>
                        <?php while ($row = mysqli_fetch_array($result)){?>
                            <tr>
                                <td><?php echo $row['task'] ?></td>
                                <td><?php echo $row['details']?></td>
                                <td>
                                    <a href="update-task.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a>
                                    <a href="delete-task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>



                </tbody>
            </table>
        </div>
    </div>
</div>













<?php include("include/fooder.php")?>

