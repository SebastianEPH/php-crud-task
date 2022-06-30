<?php include("db.php"); ?>
<?php
    $id  = $_GET['id'];
    if(!isset($id)){
        $_SESSION['message'] = "ID not found";
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
    if(isset($_POST['update_task'])){
        $task = $_POST['task'];
        $details = $_POST["details"];

        $query = "update task set task = '$task', details = '$details' WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            $_SESSION['message'] = "Error to updaing task";
            $_SESSION['message_type'] = 'danger';
            header("Location: index.php");
        }
        $_SESSION['message'] = "Update task successfully";
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }


    $query = "select * from task where id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){ // si siquiera tengo 1 row de respuesta
        $row = mysqli_fetch_array($result);
        $task = $row["task"];
        $details = $row["details"];

    }
?>
<?php include("include/header.php") ?>
<?php include("form/form.php") ?>


<?php include("include/fooder.php") ?>

