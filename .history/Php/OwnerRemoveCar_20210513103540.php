<?php 
    session_start();
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
    $email = $_SESSION['username'];
    $Id = $_GET['Id']; 
    echo $Id;
    $query = "DELETE FROM booking WHERE Email= '$email' and Id = '$Id';";
    echo $query;
    if(mysqli_query($conn,$query)){
        echo '<script type = "text/javascript">alert("Your ")</script>';
        // header("Location:Login.html");
    }else{
        echo "something went wrong";
    }
?>