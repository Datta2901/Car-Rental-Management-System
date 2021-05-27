<?php
    echo "You are in page 2";
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "userform";
    $conn = mysqli_connect($host,$username,$password,$db);
    $_SESSION['Id']=$_POST['Id'];
    echo $_SESSION['']; 
?>


