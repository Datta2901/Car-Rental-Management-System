<?php 
    session_start();
    echo $_SESSION['username'];
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
                <input type = "password" id = "Confirmpassword" name = "Confirmpassword" placeholder = "Enter your new password">
                <p class = show><input type="checkbox" onclick="myFunction1()" >Show password</p>
                <button name = "Book" style = "background-color:green;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">Update Now</button>
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

