<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        echo "Connection successful\n";
    }

    if(isset($_POST["Submit"])){
        $FirstName = $_POST['first_name'];
        $LastName = $_POST['last_name'];
        $FirstName = $_POST['Dob'];
        $FirstName = $_POST['age'];
        $FirstName = $_POST['company'];
        $FirstName = $_POST['email'];
        $FirstName = $_POST['Password'];
        $FirstName = $_POST['Phone'];
        $FirstName = $_POST['Insurance'];
        $FirstName = $_POST['Address'];
    }
?>