<?php include("db.php"); ?>
<?php
    $id = $_GET['id'];

    if(!isset($id)){
        $_SESSION['message'] = 'Error when removing task:  Id not found';
        $_SESSION['message_type'] = 'danger';
        // die('ID not found');
        header('Location: index.php');
    }
    $query = "delete from task WHERE id  = $id";
    $result = mysqli_query ($conn, $query);

    if(!$result){
        echo "hubo un error al eliminar";
        $_SESSION['message'] = 'Error when removing task';
        $_SESSION['message_type'] = 'danger';
        // die("Query Failed");
        header('Location: index.php');
    }
    $_SESSION['message'] = 'Task deleted successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
?>
