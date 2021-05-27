<?php
    echo "<h1>This is to store data into database</h1>";
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails.db";
    mysql_connect($host,$user,$password,$db);
    mysql_select_db($db);
?>