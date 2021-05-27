<?php
    echo "<h1>This is to store data into database</h1>";
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$user,$password,$db);
    // mysqli_select_db($db);
    if(isset($_POST['Sign in'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="select * from ownerdetails where Email='".$username."'AND Passw='".$password."' limit 1";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            echo " You Have Successfully Logged in";
            exit();
        }
        else{
            echo " You Have Entered Incorrect Password";
            exit();
        }    
    }
?>
