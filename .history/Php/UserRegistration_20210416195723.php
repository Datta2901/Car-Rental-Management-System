<?php
    echo "<h1>This is to store data into database</h1>";
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    mysql_connect($host,$user,$password,$db);
    mysql_select_db($db);

    if(isset($_POST['username'])){
    
        $uname=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from storedet where user='".$uname."'AND Pass='".$password."' limit 1";
        
        $result=mysql_query($sql);
        
        if(mysql_num_rows($result)==1){
            echo " You Have Successfully Logged in";
            exit();
        }
        else{
            echo " You Have Entered Incorrect Password";
            exit();
        }
            
    }
?>
