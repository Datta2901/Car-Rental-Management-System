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
        echo '<br>';
        echo "<h1> First Name  : ".$data['FirstName']."</h1>";
        echo "<h1>Last Name : ". $data['LastName']."</h1>";
        echo "<h1>Date Of Birth : ".$data['DOB']."</h1>";
        echo "<h1>Age : ".$data['Age']."</h1>";
        echo "<h1>Company Name : ".$data['CompanyName']."</h1>";
        echo "<h1>Email </h1>";
        echo $data['Email'];
        echo '<br>';
        echo "<h1>Phone Number </h1>";
        echo $data['PhoneNumber'];
        echo '<br>';
        echo "<h1>InsuranceNumber </h1>";
        echo $data['InsuranceNumber'];
        echo '<br>';
        echo "<h1>Address </h1>";
        echo $data['Address'];
        echo '<br>';

    }else{
        echo "No data exists";
    }   
?>