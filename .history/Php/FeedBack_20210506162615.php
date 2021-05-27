<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    // if(!$conn){
    //     die("Connection failed : ".mysqli_connect_error());
    // }else{
    //     echo "Connection successful\n";
    // }
    
    if(isset($_POST["Submit"])){
       $UserName = $_POST['UserName'];
       $Email = $_POST['Email'];
       $Rating = $_POST['Rating'];
       $Suggestion = $_POST['Suggestion'];
       $sql = "INSERT INTO feedback(UserName,Email,Rating,Suggestion) values('$UserName','$Email','$Rating','$Suggestion')";
        if(mysqli_query($conn,$sql)){
            echo "<h1 style = 'color : green;  padding : 300px 0px 0px 500px '> Your Query Successfully added</h1>";
            header("Refresh:5;url=ContactUs.html");
        }else{
            // echo "This Email is already registered try with other mail id";
            echo '<script type = "text/javascript">alert(</script>'
            echo "<img src = './../images/Mail.jpg' alt = 'This is an image' style = 'margin:150px 0px 0px 50px'>";
            header("Refresh:5;url=ContactUs.html");
        } 
    }else{
        echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:150px 0px 0px 50px'>";
    }
?>