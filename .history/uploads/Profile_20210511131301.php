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
    $query = "SELECT * FROM ownerdetails WHERE Email= '$email';";
    $query_run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($query_run);
    if($data){  
        echo $data['FirstName'];
        echo $data['LastName'];
        echo $data['DOB'];
        echo $data['Age'];
        echo $data['CompanyName'];
        echo '<br>';
        echo $data['Email'];
        echo '<br>';
        echo $data['PhoneNumber'];
        echo '<br>';
        echo $data['InsuranceNumber'];
        echo '<br>';
        echo $data['Address'];
        echo '<br>';
      

    }else{
        echo "No data exists";
    }   
?>