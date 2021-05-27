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
    $query = "DELETE FROM booking WHERE OwnerEmail= '$email' AND Id = '$Id';";
    if(mysqli_query($conn,$query)){
        echo '<script type = "text/javascript">alert("Your Car removed successfully")</script>';
    }else{
        echo "something went wrong";
    }
?>