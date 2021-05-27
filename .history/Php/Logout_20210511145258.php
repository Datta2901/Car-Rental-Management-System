<?php   
session_start();
session_destroy();
header("location:Lo.php");
exit();
?>