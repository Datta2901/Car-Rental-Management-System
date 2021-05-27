<?php
    // session_start();
    echo "You are in page with id : ";
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "userform";
    $conn = mysqli_connect($host,$username,$password,$db); 
    $Id = $_GET['Id'];
    echo $Id;
?>


        <h1  style = 'color:green;margin: '> FirstName']."</h1>";
        <h1 style = 'color:green;margin: '>Last Name : ". $data['LastName']."</h1>";
        <h1 style = 'color:green;margin: '>Date Of Birth : ".$data['DOB']."</h1>";
        <h1 style = 'color:green;margin: '>Age : ".$data['Age']."</h1>";
        <h1 style = 'color:green;margin: '>Company Name : ".$data['CompanyName']."</h1>";
        <h1 style = 'color:green;margin: '>Email : ".$data['Email']."</h1>";
        <h1 style = 'color:green; margin: '>Phone Number : ".$data['PhoneNumber']."</h1>";
        <h1 style = 'color:green; margin: '>InsuranceNumber : ".$data['InsuranceNumber'] ."</h1>";
        <h1 style = 'color:green; margin: '>Address : ".$data['Address']</h1>;


