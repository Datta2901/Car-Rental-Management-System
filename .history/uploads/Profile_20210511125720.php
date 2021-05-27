<?php 
    session_start();
    echo '<h1>My Profile</h1>';
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        
        echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:150px 0px 0px 50px'>";
        echo "Connection failed : ".mysqli_connect_error();
        die();
    }

    echo $_SESSION['username'];
    $email = $_SESSION['username'];
    $query = "SELECT * FROM userdetails WHERE Email= $email";
    $query_run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($query_run); 
    ?>
   
?>