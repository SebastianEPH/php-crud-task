<?php
session_start();

$conn =  mysqli_connect(
        'localhost', // hostname
    'root',  // username
    '',            // password
    'php-crud-task' // name database

);
if(isset($conn)){
//    echo"Was connected successfully";
}

?>