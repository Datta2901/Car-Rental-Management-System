<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $connmysqli_connect($host,$username,$password,$db);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        echo "Connection successful\n";
    }
?>