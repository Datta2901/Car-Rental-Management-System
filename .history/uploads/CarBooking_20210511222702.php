
<form action ="" method = "POST">
    <?php
        session_start();
        $Id = $_GET['Id'];
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

        $query = "SELECT * FROM booking WHERE Id= '$Id';";
        $query_run = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($query_run);
        if($data){  
            echo "<h1 style = 'color:red;margin:50px 300px'>Owner Details</h1>";
            echo "<h2  style = 'color:green;margin:50px 300px '> Name  : ".$data['OwnerName']."</h2>";
            echo "<h2 style = 'color:green;margin:50px 300px '>Phone Number : ". $data['OwnerPhone']."</h2>";
            echo "<h2 style = 'color:green;margin:50px 300px '>Email : ".$data['OwnerEmail']."</h2>";
            echo "<h2 style = 'color:green;margin:50px 300px '>Company Address : ".$data['Address']."</h2>";
            echo "<h1 style = 'color:red;margin:50px 300px'>Car  Details</h1>";
            echo "<h2 style = 'color:green;margin:50px 300px '> Brand : ".$data['Brand']."</h2>";
            echo "<h2 style = 'color:green;margin:50px 300px '>Model : ".$data['Model']."</h2>";
            echo "<h2 style = 'color:green; margin:50px 300px '>Colour : ".$data['Colour']."</h2>";
            echo "<h2 style = 'color:green; margin:50px 300px '>Kilometers Travelled Previously(in km) : ".$data['Kilo'] ."</h2>";
            echo "<h2 style = 'color:green; margin:50px 300px '>Seating Capacity : ".$data['Seating']."</h2>";
            echo "<h2 style = 'color:green; margin:50px 300px '>Fare (per day) : ".$data['Fare']."</h2>";
            echo '<center><img src="data:image/jpeg;base64,'.base64_encode($data['Image'] ).'" style = "text-align:center" height="500em"/></center>';  
        }else{
            echo "Something went wrong";
        }
    ?>
        <marquee ><h1 style = "color:blue">Please Enter below details to book  a car for rent.That is  Starting date - when you want to take car,Number of days required. </h1></marquee>
        <center>
        <div>
            <label>Starting Date</label>
            <input type = "Date" name="sDate"  required>
            <p></p>
        </div>
        <div>
            <label>Number of days</label>
            <input type = "number" placeholder = "Days" name ="Days" required>
        </div>
        <br>
        <button name = "Book" style = "background-color:Red;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">Book Now</button>
        </center>
</form>



<?php
    if(isset($_POST['Book'])){
        echo $Id;
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
        $conn1 = $conn = mysqli_connect($host,$user,$password,$db);
        $email = $_SESSION['username'];
        $query = "SELECT * FROM userdetails WHERE Email= '$email';";
        $query_run = mysqli_query($conn1,$query);
        $data = mysqli_fetch_assoc($query_run);
        $name = "";
        $name .= $data['FirstName'];
        $name .= $data['LastName'];
        $phone = $_POST['PhoneNumber'];
        $Days = $_POST['Days'];
        $sDate = $_POST['sDate'];

        $query = "UPDATE booking SET Username = '$name',UserEmail = '$email',Phonenumber = '$ph'";
    }
?>    



