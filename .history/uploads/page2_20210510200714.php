<?php
    session_start();
    echo "You are in page 2";
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "userform";
    $conn = mysqli_connect($host,$username,$password,$db);
    echo $_SESSION['Id']; 
?>


