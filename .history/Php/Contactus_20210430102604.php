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
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
       $sql = "INSERT INTO contactus(UserName,Email,Subject,Msg) values('$UserName','$Email',$Subject','$Msg')";
       if(mysqli_query($conn,$sql)){
      
]
            echo "Record Added Successfully";
            // header("Location: Display.php");
       }else{
           echo "Records not added !!";
       }
    }else{
        header("location: ContactUs.html");
    }
?>