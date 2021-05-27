<?php

$Id = $_GET['Id'];
echo $Id;
echo '<h1 align = center style = "color:red;">My Profile</h1>';
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        
        echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:50px 300px150px 0px 0px 50px'>";
        echo "Connection failed : ".mysqli_connect_error();
        die();
    }
    $query = "UPDATE booking SET Status = 0, WHERE Id= '$Id';";
    if($data = mysqli_query($conn,$query)){
        echo $data["Status"];
        echo '<script type = "text/javascript">alert("Your Feedback is successfully added")</script>';
        // header("Location:Login.html");
    }else{
        echo "something went wrong";
    }
?>