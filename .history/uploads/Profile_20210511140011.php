<?php 
    session_start();
    echo '<h1 align = center style = "color:red;">My Profile</h1>';
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

    $email =$_SESSION['username'];
    $username = strstr($email, '@', true);
    echo "<h1 align= right style = 'color:blue'> "."Hello 😀".$username."</h1>";
    $email = $_SESSION['username'];
    $query = "SELECT * FROM ownerdetails WHERE Email= '$email';";
    $query_run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($query_run);
    if($data){  
        echo '<br>';
        echo "<h1  style = 'color:green;margin: inherit'> First Name  : ".$data['FirstName']."</h1>";
        echo "<h1 style = 'color:green;margin: inherit'>Last Name : ". $data['LastName']."</h1>";
        echo "<h1 style = 'color:green;margin: inherit'>Date Of Birth : ".$data['DOB']."</h1>";
        echo "<h1 style = 'color:green;margin: inherit'>Age : ".$data['Age']."</h1>";
        echo "<h1 style = 'color:green;margin: inherit'>Company Name : ".$data['CompanyName']."</h1>";
        echo "<h1 style = 'color:green;margin: inherit'>Email : ".$data['Email']."</h1>";
        echo "<h1 style = 'color:green; margin: inherit'>Phone Number : ".$data['PhoneNumber']."</h1>";
        echo "<h1 style = 'color:green; margin: inherit'>InsuranceNumber : ".$data['InsuranceNumber'] ."</h1>";
        echo "<h1 style = 'color:green; margin: inherit'>Address : ".$data['Address']."</h1>";
    }else{
        echo "No data exists";
    }   
?>