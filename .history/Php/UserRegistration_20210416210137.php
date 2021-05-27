<?php
    echo "<h1>Are u working ? </h1>";

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        echo "<h1>Connection successful</h1>";
    }

    if(isset($_POST['username'])){
    
        $uname=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from storedetails where user='".$uname."'AND Pass='".$password."' limit 1";
        
        $result=mysql_query($sql);
  
    }
    
?>