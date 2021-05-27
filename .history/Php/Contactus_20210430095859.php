<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
       $sql = "INSERT INTO contactus(UserName,Email,Subject,Msg) values('$UserName','$Email',$Subject','$Msg')";
       if(mysqli_query($conn,$sql)){
            echo "Record Added Successfully";
            // header("Location: Display.php");
       }
    }else{
        header("location: ContactUs.html");
    }
?>