<html>
    <head>
        <title> Image upload</title>
    </head>
    <body>
        <center>
            <h1>Image upload to database using php </h1>
            <form action = "" method = "POST" enctype ="multipart/form-data">
            <label>Select image :</label>
            <input type = "file" name = "Image" ></input>
            <label>Name :</label>
            <input type = "text" name = "Name"></input><br></br>
            <button name = "Upload">Submit</button>
            </form>
        </center>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./../Css/Home.css">
    <title>Car Rental</title>
  </head>
  <hr class = "Rule">
  <body>
  <p class = "some" >Car Rental Website </p>
  <center>
    <nav>
        <a href = "./OwnerHome.php">Home </a>
        <a href = "./ManageCars.php">Add Cars </a>
        <a href = "./ContactUs.html">Contact Us </a>
        <a href = "./Login.html">Log Out </a>  
    </nav>
    </center>
    <br>
  <hr class = "Rule">
    <form action = "./AddCarsDatabase.php" method="POST" enctype="multipart/form-data">
        <h2 class = "name" > Name<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Name" required>
        </h2>
        <h2 class = "name" > Phone Number<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "PhoneNumber" required>
        </h2>
        <h2 class = "name" >Addresss<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Address" required>
        </h2>
        <h2 class = "name" >Car Brand<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Brand" required>
        </h2>
        <h2 class = "name" >Car Model<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Model" required>
        </h2>
        <h2 class = "name" >Car Colour<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Colour" required>
        </h2>
        <h2 class = "name" >Kilo Meters Covered previously<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Kilo" required>
        </h2>
        <h2 class = "name" >Seating Capacity<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Seating" required>
        </h2>
        <h2 for="img">Car image:<span style = "color: red;">&#42;</span>
        <input type="file" name="file" required>
        <!-- <input type="submit" name="submit" value="Upload"> -->
        </h2>
        <button name = "Submit">Submit</button>
        
    </form>
  </script>
  </body>
</html>


?>