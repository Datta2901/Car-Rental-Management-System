<?php 
    session_start();
    // echo $_SESSION['username'];
    echo '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>
<body>
    
    <div class="card-body">
        <center>
            <h1>Update Password</h1>
            <form action = "" method = "POST">
                <label>New Password</label>
                <input type = "password" id = "password" name = "password" placeholder = "Enter your new password">
                <p class = show><input type="checkbox" onclick="myFunction()" >Show password</p>
                
                <label>Confirm Password</label>
                <input type = "password" id = "Confirmpassword" name = "Confirmpassword" placeholder = "Enter password again">
                <p class = show><input type="checkbox" onclick="myFunction1()" >Show password</p>
                <button name = "Submit" style = "background-color:green;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">Update Now</button>
            </form>
        </center>
    </div>



    <script>
      function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password"){
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      function myFunction1() {
        var x = document.getElementById("Confirmpassword");
        if (x.type === "password"){
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
</body>
</html>


<?php 

if(isset($_POST['Submit'])){
    $password = $_POST['password'];
    $Confirmpassword = $_POST['Confirmpassword'];

    if($password != $Confirmpassword){
        echo '<script type = "text/javascript">alert("Password not matched,please try again!!")</script>';
    }else{
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "storedetails";
        $conn = mysqli_connect($host,$user,$password,$db);
        if(!$conn){  
            echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:50px 300px150px 0px 0px 50px'>";
            echo "Connection failed : ".mysqli_connect_error();
            die();
        }
        $email = $_SESSION['username'];
        $password = $_POST['password'];
        $query = "UPDATE userdetails SET Password = '$password', where Email = '$email'";
        // echo $query;
        $result = mysqli_query($conn,$query);
        if($result){
            echo '<script type = "text/javascript">alert("Your Password has been successfully updated")</script>';     
        }e
    }
}

?>
