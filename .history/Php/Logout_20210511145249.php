<?php   
session_start();
session_destroy();
header("location:/index.php"); //to redirect back to "index.php" after logging out
exit();
?>