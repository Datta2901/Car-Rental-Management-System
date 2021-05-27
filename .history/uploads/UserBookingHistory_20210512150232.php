<?php 
session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    $email = $_SESSION['username'];
    $query = "SELECT * FROM booking WHERE UserEmail = '$email'";
    echo $email;
    $query_run = mysqli_query($conn,$query);    
    echo "<table>";
    $i = 0;
    i
?>