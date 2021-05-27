<?php 
    if(isset($_POST['btn-send']))
    {

        
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
       
    }
    else
    {
        header("location: ContactUs.html");
    }
?>