<?php
    // session_start();
    echo "You are in page with id : ";
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "userform";
    $conn = mysqli_connect($host,$username,$password,$db); 
    $Id = $_GET['Id'];
    
    echo $Id;
?>



