<?php 
    if(isset($_POST['btn-send']))
    {
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
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
       $sql = "INSERT INTO contactus(UserName,Email,Subject,Msg) values('$UserName','$Email',$Subject','$Msg')";
        if(mysqli_query($,$sql)){
            echo "Record Added Successfully";
            header("Location: Display.php");
        }
    }else{
        header("location: ContactUs.html");
    }
?>