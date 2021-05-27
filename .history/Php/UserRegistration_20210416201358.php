<?php
    echo "<h1>Are u working ? </h1>"

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    mysql_connect($host,$user,$password,$db);
    mysql_select_db($db);
?>