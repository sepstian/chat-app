<?php 
    $conn = mysqli_connect("localhost:8111", "root", "", "chat");
    if(!$conn){
        echo "Database connected" . mysqli_connect_error();
    }
?>