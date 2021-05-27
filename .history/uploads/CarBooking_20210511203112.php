<?php
    session_start();
    $Id = $_GET['Id'];
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

    $query = "SELECT * FROM booking WHERE Id= 'Id';";
    $query_run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($query_run);
    if($data){  
        echo "<h1  style = 'color:green;margin:50px 300px '> Owner Name  : ".$data['OwnerName']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Last Name : ". $data['OwnerPhone']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Date Of Birth : ".$data['OwnerMail']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Age : ".$data['Address']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Company Name : ".$data['']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Email : ".$data['Email']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Phone Number : ".$data['PhoneNumber']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>InsuranceNumber : ".$data['InsuranceNumber'] ."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Address : ".$data['Address']."</h1>";
    }

?>