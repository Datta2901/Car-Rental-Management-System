<?php
    echo "<h1>Are u working ? </h1>";

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        die("")
    }

    
?>