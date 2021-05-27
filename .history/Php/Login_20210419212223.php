<?php
    <style>
        h1{
            color:red;
            displa
        }
    </style>
    // echo "<h1>This is to store data into database</h1>";
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        echo "Connection successful\n";
    }
    // mysqli_select_db($db);
    if(isset($_POST["Signin"])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($_POST['type'] == "User"){
            $sql="select * from ownerdetails where Email='".$username."'AND Password='".$password."' limit 1";
        }else{
            $sql="select * from userdetails where Email='".$username."'AND Password='".$password."' limit 1";
        }
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1){
            // echo " You Have Successfully Logged in";
            // echo "Wait for 10s it will direct into sign in page";
            header("Location:Home.html");
        }
        else{
            echo "<h1>You Have Entered Incorrect Password</h1>";
            header("Refresh:5;url=Login.html");
        }    
    }
?>
