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


        <h1  style = 'color:green;margin: '> First Name  : "['FirstName']."</h1>";
        <h1 style = 'color:green;margin: '>Last Name : ".['LastName']."</h1>";
        <h1 style = 'color:green;margin: '>Date Of Birth : "['DOB']."</h1>";
        <h1 style = 'color:green;margin: '>Age : "['Age']."</h1>";
        <h1 style = 'color:green;margin: '>Company Name : "['CompanyName']."</h1>";
        <h1 style = 'color:green;margin: '>Email : "['Email']."</h1>";
        <h1 style = 'color:green; margin: '>Phone Number : "['PhoneNumber']."</h1>";
        <h1 style = 'color:green; margin: '>InsuranceNumber : "['InsuranceNumber'] ."</h1>";
        <h1 style = 'color:green; margin: '>Address : "['Address'].</h1>;


