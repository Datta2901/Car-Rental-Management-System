<html>
<body>
<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    $username = "root"; 
$password = ""; 
$database = "your_database"; 
$mysqli = new mysqli("localhost", $username, $password, $database);
    // $query = "SELECT * FROM cardetails";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
      </tr>';

if ($result = $mysqli->query("SELECT * FROM cardetails")) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"]; 
        $field6name = $row["col6"]; 
        $field7name = $row["col7"]; 
        $field8name = $row["col8"]; 
        $field9name = $row["col9"]; 
        $field10name = $row["col10"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html