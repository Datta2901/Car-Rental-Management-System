<?php 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:Contactu.php?error');
       }
       else
       {
           $to = "admin@onlineittuts.com";

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