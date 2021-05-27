<?php 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
       {
           $to = ".com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:ContactUs.html?success");
           }
       }
    }
    else
    {
        header("location: ContactUs.html");
    }
?>