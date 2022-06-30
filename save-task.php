<?php
    include("db.php");

    if(isset($_POST["save_task"])){
       $title =  $_POST["task"];
       $details = $_POST["details"];
       $query = "insert into task(task, details) VALUES ('$title', '$details') ";
       $result = mysqli_query($conn, $query);
       if(!$result){
           echo 'Ocurrio un error al guardar los datos  ';
           die("Query failed");
       }
       $_SESSION["message"] = "task saved successfully";
       $_SESSION["message_type"] = "success";

       header("Location: index.php");
    }