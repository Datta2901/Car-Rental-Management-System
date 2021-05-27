<?php 
    session_start();
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
    $email = $_SESSION['username'];
    echo $email;
    if(mysql_query("Delete from ownerdetails where Email='$email';")){
        echo '<script type = "text/javascript">alert("Your Account Deleted Successfully from our database")</script>';
        header(Location:"Logi")
    }else{

    }
?>