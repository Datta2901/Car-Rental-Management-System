<?php
    // session_start();
    echo "You are in page with id : ";
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "userform";
    $conn = mysqli_connect($host,$username,$password,$db);
    // echo $_SESSION['Id']; 
    $Id = $_GET['Id'];
    echo $Id;
?>
<script type="text/javascript">
window.location ="Dis.php";
</script>


